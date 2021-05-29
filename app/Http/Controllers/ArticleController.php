<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleTag;


class ArticleController extends Controller
{
    public function showArticle($id)
    {

        $article = Article::select('articles.id',
            'articles.title',
            'articles.content',
            'articles.create_at',
            'images.path',
            'categories.name',
            'articles.category_id')
            ->join('images', 'articles.image_id', "=", 'images.id')
            ->join('categories', 'categories.id', "=", 'articles.category_id')
            ->whereNotNull('articles.published_at')
            ->orderBy('articles.create_at', 'desc')
            ->find($id);

        $tags = $this->showTag($id);
        return view('pages.article', compact('article'), compact('tags'));
    }

    public function showTag($id)
    {
        $tag =
            ArticleTag::select('tags.name',
                'tagsConnections.tag_id',
                'tagsConnections.article_id')
                ->join('tagsConnections', 'tags.id', "=", 'tagsConnections.tag_id');

        $tags = Article::select('articles.id',
            'articles.title',
            'tg.tag_id',
            'tg.name as tagName')
            ->joinSub($tag, 'tg', function ($join) {
                $join->on('tg.article_id', "=", 'articles.id');
            })->where('articles.id', "=", $id)->get();
        return $tags;
    }
}

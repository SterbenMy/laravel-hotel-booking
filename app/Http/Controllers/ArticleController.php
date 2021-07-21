<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleComment;
use App\Models\ArticleTag;
use Illuminate\Http\Request;


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

        $comments = $this->showComments($id);
        $tags = $this->showTag($id);
        return view('pages.article')
            ->with(compact('article'))
            ->with(compact('tags'))
            ->with(compact('comments'));
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

    public function showComments($id)
    {
        $comments =
            ArticleComment::select('message', 'updated_at', 'author')->where('article_id', "=", $id)->paginate(3);
        return $comments;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'message' => 'bail|required|min:3|max:255',
            'author' => 'bail|required'
        ], [
            'author.required'=> 'A author is required',
            'message.required' => 'A message is required',
            'message.min' => 'The message must be at least 3 characters long',
            'message.max' => 'The message cannot exceed 255 characters'
        ]);

        ArticleComment::create([
            'message' => $request->input('message'),
            'article_id' => $request->input('article_id'),
            'author' => $request->input('author')
        ]);
        return back()->with(['message' => 'Article successfully added!']);
    }
}

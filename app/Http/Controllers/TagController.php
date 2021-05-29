<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleTag;


class TagController extends Controller
{
    public function show($id){
        $tag=
            ArticleTag::select('tags.name',
                'tagsConnections.tag_id',
                'tagsConnections.article_id')
            ->join('tagsConnections','tags.id',"=",'tagsConnections.tag_id');

        $tags =Article::select('articles.id as articleID',
                                        'articles.create_at',
                                        'articles.title',
                                        'images.path',
                                        'articles.short_description',
                                        'tg.tag_id as id',
                                        'tg.name as tagName')
            ->joinSub($tag,'tg',function($join){
                $join->on('tg.article_id',"=",'articles.id');
            })
            ->join('images','articles.image_id',"=",'images.id')
            ->where('tg.tag_id',"=",$id)->paginate(6);
        return view('pages.tag',compact('tags'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;

class CategoryController extends Controller
{
    public function show($id){
        $articles =
                 Article::select('articles.id','articles.title','articles.short_description','articles.create_at','images.path','articles.category_id')
                 ->join('images','images.id',"=",'articles.image_id');

        $categories = ArticleCategory::select('art.id as article_id','art.title','art.short_description','art.create_at','art.path','art.category_id as id','categories.name')
            ->joinSub($articles,'art',function ($join){
                $join->on('art.category_id',"=",'categories.id');
            })
            ->where('art.category_id',$id)
            ->paginate(6);
        return view('pages.category',compact('categories'));
    }
}

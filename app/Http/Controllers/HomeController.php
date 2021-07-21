<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{
    public function index(){

        $articles = Article::select('articles.id','articles.title','articles.short_description','articles.create_at','images.path')
            ->join('images','images.id',"=",'articles.image_id')
            ->whereNotNull('articles.published_at')
            ->orderBy('articles.create_at','desc')
            ->paginate(6);
        return view('pages.articles',compact('articles'));
    }
}

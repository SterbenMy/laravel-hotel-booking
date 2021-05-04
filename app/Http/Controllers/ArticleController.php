<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show(){
        $articles = Article::all();
        return view('home',compact('articles'));
    }

    public function showData($id){
        $singleArticle= Article::find($id);
        return view('singleArticle',compact('singleArticle'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        $articles = Article::select('articles.id','articles.title','articles.short_description','articles.create_at','images.path')
            ->join('images','images.id',"=",'articles.image_id')
            ->whereNotNull('articles.published_at')
            ->orderBy('articles.create_at','desc')
            ->paginate(6);
//        $articles=DB::table('articles')
//            ->join('images','articles.image_id',"=",'images.id')
//            ->get();
        return view('pages.homepage',compact('articles'));
    }
}

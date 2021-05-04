<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleTag;
use Illuminate\Support\Facades\DB;
class TagController extends Controller
{
    public function show(){
        $articleTags= ArticleTag::all();
        return view('tags',compact('articleTags'));
    }

    public function showData($id){
        $singleTag = DB::table('tags')
        ->join('tagsConnections','tags.id',"=",'tagsConnections.tag_id')
        ->join('articles','articles.id',"=",'tagsConnections.article_id')
        ->select('tags.name','articles.title')
        ->where('tags.id',"=",$id)
        ->get();
        return view('singleTag',compact('singleTag'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    public function index($id){
        $tg=
           // DB::table('tags')->
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
            ->joinSub($tg,'tg',function($join){
                $join->on('tg.article_id',"=",'articles.id');
            })
            ->join('images','articles.image_id',"=",'images.id')
            ->where('tg.tag_id',"=",$id)->paginate(6);
        return view('pages.tag',compact('tags'));
    }
}

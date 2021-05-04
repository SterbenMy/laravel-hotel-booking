<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ArticleCategory;
class CategoryController extends Controller
{
    public function show(){
        $categories= ArticleCategory::all();
        return view('categories',compact('categories'));
    }

    public function showData($id){
        $category = DB::table('categories')
        ->join('articles','categories.id',"=",'articles.category_id')
        ->select('categories.name','articles.title')
        ->where('categories.id',"=",$id)
        ->get();
        return view('singleCategory',compact('category'));
    }
}

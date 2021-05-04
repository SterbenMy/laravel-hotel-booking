<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\ArticleController::class, 'show']);
Route::get('article/{id}',[\App\Http\Controllers\ArticleController::class,'showData']);
Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'show']);
Route::get('category/{id}',[\App\Http\Controllers\CategoryController::class,'showData']);
Route::get('tags/', [\App\Http\Controllers\TagController::class, 'show']);
Route::get('tag/{id}',[\App\Http\Controllers\TagController::class,'showData']);

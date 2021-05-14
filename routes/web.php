<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('article/{id}',[ArticleController::class,'index']);
Route::get('/category/{id}',[CategoryController::class,'index']);
Route::get('/tag/{id}',[TagController::class,'index']);
Route::get('/email', [ContactFormController::class,'index']);
Route::post('/email', [ContactFormController::class,'sendMailas']);

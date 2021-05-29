<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Middleware\LoggingMiddleware;
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
Route::middleware([LoggingMiddleware::class])->group(function(){
    Route::get('/', [HomeController::class, 'index']);
    Route::get('article/{id}', [ArticleController::class, 'showArticle']);
    Route::get('/category/{id}', [CategoryController::class, 'show']);
    Route::get('/tag/{id}', [TagController::class, 'show']);
    Route::get('/email', [ContactFormController::class, 'index']);

});
Route::post('/email', [ContactFormController::class,'sendMail']);

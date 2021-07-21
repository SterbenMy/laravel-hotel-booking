<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\SingleHotelController;
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
    Route::get('/articles', [HomeController::class, 'index']);
    Route::get('article/{id}', [ArticleController::class, 'showArticle']);
    Route::get('/category/{id}', [CategoryController::class, 'show']);
    Route::get('/tag/{id}', [TagController::class, 'show']);
    Route::get('/email', [ContactFormController::class, 'index']);
    Route::get('/', [HomePageController::class,'index']);
    Route::get('/about', [AboutController::class,'index']);
    Route::get('/hotels', [HotelsController::class,'index']);
    Route::get('/hotels/{id}', [SingleHotelController::class,'showHotel']);
    Route::get('/cart', [CartController::class,'showCart']);
});
Route::post('/email', [ContactFormController::class,'sendMail']);
Route::post('/article/{id}/comments', [ArticleController::class, 'store']);

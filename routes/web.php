<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\ProductController;
use App\Models\Comment;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/',[CategoryController::class,'index']);
Route::get('/post',[Postcontroller::class,'posts']);
Route::get('/create',[CategoryController::class,'create']);
Route::post('/category',[CategoryController::class,'category']);
Route::get('/createpost',[PostController::class,'create']);
Route::post('/addpost',[PostController::class,'createpost']);
Route::get('/comment',[CommentController::class,'comment']);
Route::get('/like',[LikeController::class,'like']);
Route::get('/product',[ProductController::class,'product']);
Route::get('/order',[OrderController::class,'Orders']);
Route::get('/addcomment',[CommentController::class,'addcomment']);
Route::post('/createcomment',[CommentController::class,'createcomment']);
Route::get('/createproduct',[ProductController::class,'createproduct']);
Route::post('/addproduct',[ProductController::class,'addproduct']);
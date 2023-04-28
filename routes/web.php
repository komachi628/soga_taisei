<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Models\Article;
use App\Models\User;
use App\Models\Post;




Route::resource('/post','PostController');

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts', [PostController::class, 'store']);

Route::get('/', [PostController::class, 'index']);



Route::resource('/comment','CommentController');

Route::get('/commet/create', [CommentController::class, 'create']);

Route::post('/comment', [CommentController::class, 'store']);


Route::get('/latest_article' ,function(){
    return view('latest_article');
});
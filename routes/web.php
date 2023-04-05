<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class,'index']);

Route::get('/main',function(){
    return view('main');
});

Route::get('/latest_article',function(){
    return view('latest_article');
});

Route::get('/popular_articles_list',function(){
    return view('popular_articles_list');
});

Route::get('/others',function(){
    return view('others');
});

Route::get('/comment',function(){
    return view('comment');
});

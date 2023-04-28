<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    
    //投稿フォーム
    public function create()
    {
    return view('posts/create');
    }
    
    //投稿フォーム保存
    public function store(Request $request, Post $post)
    {
    
    $image = $request->file('image');    
    

    if($request('image')){
        $name=request()->file('image')->getOriginalName();
        $file=request()->file('image')->move();
    }else{
        $path=null;
    }

    $input = $request['post'];
    $post->fill($input)->save();
    
    return redirect('/main/' . $post->id);
    }
    
    //それぞれの記事ページにとぶ
    public function show(Post $post){
        return view('posts/index')->with(['posts' => $post->get()]);
    }
    //トップページ　一覧取得
    public function index(Post $post){
        return view('main')->with(['posts'=>$post->get()]);
    }


}

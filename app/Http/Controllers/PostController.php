<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cloudinary;


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
            $input = $request['post'];
            $image = $request->file('image'); 
            $image = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input += ['image' => $image];
            $post->fill($input)->save();
            
            return redirect('/posts/' . $post->id);
        }
        
        //それぞれの記事ページにとぶ
    public function show(Post $post)
        {
            return view('posts/index')->with(['posts' => $post->get()]);
        }
        //トップページ　一覧取得
        public function index(Post $post)
        {
            return view('main')->with(['posts'=>$post->get()]);
        }
}

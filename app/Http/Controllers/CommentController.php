<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
     public function index(Comment $comment)
    {
        return view('comment/index')->with(['comments' => $comment->get()]);
    }
    
    public function create()
    {
    return view('comment/create');
    }
    
    public function store(Request $request, Comment $comment)
    {
    $input = $request['comment'];
    $comment->fill($input)->save();
    return redirect('/comments/' . $comment->id);
    }

}

@extends ('layouts.common_layout')

@section('css')
    <link rel="stylesheet" href="public/CSS/create.css">
@endsection

@section('content')
      <h1>Blog Name</h1>
        <form action="/posts" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <div class='form-group'>
                    <input type="text" class='form-control form-width-md' name="post[title]" placeholder="タイトル"/>
                </div>
            </div>
            
            <div class="synopsis">
                <h2>あらすじ</h2>
                <textarea name="post[synopsis]" placeholder="あらすじ"></textarea>
            </div>
            
            <div class="body">
                <h2>本文</h2>
                <textarea name="post[body]" placeholder="本文"></textarea>
            </div>
            
            
            <div class="category">
                <h2>カテゴリ</h2>
                <textarea name="post[category]" placeholder="カテゴリ"></textarea>
            </div>
            
            <div class="image">
                <input type="file" name="image">
            </div>
            </div>
            <input type="submit" class='btn btn-success btn-lg' value="投稿する"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
@endsection
@extends('layouts.common_layout')

@section('css')
<link rel="stylesheet" href="/public/css/main.css" >
@endsection

@section('content')
 
<div class="container">
<div class="row">
@foreach ($posts as $post)
  <div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <div class="bd-placeholder-img card-img-top">
          <img class="card-img-top" src="./img/280x150.png" alt="storage/app/public/">
        </div>

        <div class="card-body">
          <h4>{{$post->title}}</h4>
          <p class="card-text text-truncate">
            {{$post->synopsis}}
          </p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">詳細</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">編集</button>
            </div>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
    </div>
  </div>
@endforeach
@endsection
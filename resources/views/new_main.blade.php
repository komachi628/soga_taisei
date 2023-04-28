@extends('layouts.common_layout')

@section('content')

<div class='posts'>
            @foreach ($posts as $post)
                    
                    <div class="card" style="width: 280px;">
            	<img class="card-img-top" src="./img/280x150.png" alt="/public/BF94396C-4100-45E8-9CC7-39E06AE52DC7_1_105_c.jpeg">
            	<div class="card-body">
            		<p class="card-text"><h3>{{$post->title}}</h3></p>
            		<a href="/posts/{post}" class="card-link">{{ $post->title }}</a><br>
            		
            	    <h4 class='body'>{{ $post->synopsis }}</h4>	
            	</div>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
     <div class="card-deck">

        <div class="card">
                  <div class="card-header">
        /////////////////////////////////////////////////////////////////////////////////////
                    <p class="card-text"><h3>{{$post->title}}</h3></p>
        /////////////////////////////////////////////////////////////////////////////////////
                    </div>
                    <div class="card-body">
                    <ul>
                        <h4 class='body'>{{ $post->synopsis }}</h4>	
                    </ul>
                    </div>
                    
        </div>
    </div>            
                
                
            @endforeach
        </div>
@endsection
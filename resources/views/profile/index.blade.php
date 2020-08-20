@extends('layouts.front')

@section('content')
    <div class="container">
       
        <hr color="#0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                
                                <div class="name">
                                    {{ $post->name }}
                                </div>
                                <div class="gender mt-3">
                                   性別： {{ $post->gender }}
                                </div>
                            </div>
                            
                                <div class="hobby mt-3">
                                   趣味： {{ str_limit($post->hobby, 1500) }}
                                </div>
                                <div class="introduction mt-3">
                                   <div class="intro">自己紹介</div>
                                   <br>
                                   {{ str_limit($post->introduction, 1500) }}
                                </div>
                            
                            
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
       
    </div>
@endsection
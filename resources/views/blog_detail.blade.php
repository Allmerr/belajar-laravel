@extends('layouts.main')

@section('container')
    <div class="container my-5">
        <div class="blog-content">
            <h6 style="color:#696969">Create at {{ $post->created_at }}</h6>
            <p style="color: #acacac;">Made by <a style="color: #696969" href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</i> in <a style="color: #696969" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <h1>{{ $post->title }}</h1>
            <img src="https://source.unsplash.com/500x500" alt="">
            {!! $post->body !!}
            <br>
        </div>
    </div>
@endsection
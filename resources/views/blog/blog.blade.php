@extends('layouts.main')

@section('container')
    <div class="container my-3">
        <h1 class="text-center my-2">{{ $title }}</h1>
        {{-- form --}}
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form action="/blog" method="GET">
                    <select class="form-select mb-2" name="category">
                        <option selected value="">category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->slug }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <select class="form-select mb-2" name="author">
                        <option selected value="">author</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->username }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- akhir form --}}
        {{-- header --}}
        @if ($posts->count())
        <div class="my-big-card">
            <div class="left">
                <h3>{{ $posts[0]->title }}</h3>
                <h6 style="color: #acacac" class="mt-2 mb-3">Create by <a href="/blog?author={{ $posts[0]->author->username }}" style="color: #696969">{{ $posts[0]->author->name }}</a> in <a style="color: #696969" href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></h6>
                <p>{{ $posts[0]->excerpt }}</p>
                <a class="border border-secondary p-1 rounded text-dark" href="/blog/{{ $posts[0]->slug }}">See More</a>
            </div>
            <div class="right">
                <img src="https://source.unsplash.com/500x500" alt="">
            </div>
        </div>
        {{-- akhir header --}}
        {{-- body --}}
        <div class="my-card-container mt-5 pb-5">
            @foreach ($posts->skip(1) as $post)
                <div class="card" style="">
                    <img src="https://source.unsplash.com/600x600" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text" style="color:#acacac;">Create by <a href="/blog?author={{ $post->author->username }}" style="color: #696969">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" style="color: #696969">{{ $post->category->name }}</a></p>
                        <p style="color:#acacac;">Created at<span style="color: #696969">  {{ $post->created_at }} </span></p>
                        <a class="border border-secondary p-1 rounded text-dark" href="/blog/{{ $post->slug }}">See More</a>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- akhir body --}}
        {{ $posts->links() }}
        @else
        <div class="alert alert-light">No Posts Found</div>
        @endif

    </div>
@endsection
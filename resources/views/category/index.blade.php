@extends('layouts.main')

@section('container')
    <div class="container my-3">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/blog?category={{ $category->slug }}">
                        <div class="card text-bg-dark card-category">
                            <img src="https://source.unsplash.com/500x400" class="card-img" alt="...">
                            <div class="card-img-overlay card-content d-flex justify-content-center align-items-center">
                                <h5 class="card-title">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
@endsection
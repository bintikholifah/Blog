@extends('layouts/main')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>

@if ($posts->count())    
    <div class="card mb-3">
        {{-- <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}"> --}}
        <img src="https://images.unsplash.com/photo-1721109890030-00faaa68981f?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="1200" height="400" class="card-img-top" alt="hero-post">
        <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <p>
            <small class="text-muted">
                By. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> 
                in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        <p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more...</a>
        </div>
    </div>
@else
    <p class="text-center fs-4">No post found.</p>
@endif

<div class="container">
    <div class="row">
        @foreach($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color:rgba(0, 0, 0, 0.6)
                    "><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                    {{-- <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}"> --}}
                    <img src="https://images.unsplash.com/photo-1497105943914-b90d55145023?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzB8fGNvZmZlZXxlbnwwfDB8MHx8fDA%3D" width="500" height="300" class="card-img-top" alt="post">
                    <div class="card-body">
                    <h5 class="card-title">{{ $post->title}}</h5>
                    <p>
                        <small class="text-muted">
                            By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                        </small>
                    <p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More...</a>
                    </div>
                </div>
            </div>
         @endforeach
    </div>
</div>
@endsection
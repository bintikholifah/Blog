@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>
                By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> 
                in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
            </p>
            {{-- <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $posts[0]->category->name }}" class="img-fluid"> --}}
            <img src="https://plus.unsplash.com/premium_photo-1701294051267-3b049a801b6a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGdyZXklMjB3aGl0ZXxlbnwwfDB8MHx8fDA%3D" width="800" height="300" class="img-fluid" alt="post">
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/posts" class="d-block mt-2">Back to Posts</a>
        </div>
    </div>
</div>

@endsection
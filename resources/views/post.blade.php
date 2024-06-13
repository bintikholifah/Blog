@extends('layouts.main')

@section('container')
<article>
    <h1 class="mb-5">{{ $post->title }}</h1>
    
    <p>By. Binti Kholifah in {{ $post->category->name }}</p>

    {!! $post->body !!}

    <a href="/posts">Back to Posts</a>
@endsection
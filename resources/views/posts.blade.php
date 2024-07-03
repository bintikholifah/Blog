@extends('layouts/main')

@section('container')
<h1 class="mb-5">Halaman Blog Posts</h1>

    @foreach ($posts as $post)
    <article class="mb-4 border-bottom pb-2">
        <h2>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title}}</a>
        </h2>

        <p>
            By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> 
            in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        <p>

        <p>{{ $post->excerpt }}</p>

        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
    </article>
    @endforeach
@endsection
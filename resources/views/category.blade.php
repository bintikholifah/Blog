@extends('layouts/main')

@section('container')
<article class="mb-5">
    <h1 class="mb-5">Post Category : {{ $category }}</h1>
    @foreach ($posts as $post)
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title}}</a>
        </h2>
        <p>{{ $post->excerpt }}</p>
      
    @endforeach
</article>
@endsection
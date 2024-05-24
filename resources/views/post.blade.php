@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post["title"] }}</h2>
    <h3>{{ $post["author"] }}</h3>
    <p>{{ $post["body"] }}</p>

    <a href="/posts">Back to Posts</a>
</article>
@endsection
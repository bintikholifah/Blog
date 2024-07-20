@extends('layouts/main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/categories/{{ $category->slug }}">
                        <div class="card bg-dark">
                            {{-- <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}"> --}}
                            <img src="https://images.unsplash.com/photo-1721040840457-3da28666bc45?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwxMjB8fHxlbnwwfHx8fHw%3D" width="500" height="400" class="card-img" alt="category">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-3 fs-3 text-white" style="background-color:rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                        </div>
                    </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
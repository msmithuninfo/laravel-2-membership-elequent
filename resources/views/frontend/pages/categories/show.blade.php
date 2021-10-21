@extends('frontend.layouts.master')

@section('main-content')
    <div class="container">
            <h2>{{ $category->name }}</h2>
        @foreach ($category->posts as $post)
            <div class="row">
                <p>{{ $post->title }}</p>
                <p>{{ $post->slug }}</p>
                <p>{{ $post->description }}</p>
                <p>{{ $post->status }}</p>
                <p>{{ $post->category->id }} {{ $post->category->name }}</p>
            </div>
            <hr>
        @endforeach
    </div>
@endsection

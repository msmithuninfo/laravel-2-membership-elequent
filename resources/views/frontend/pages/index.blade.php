@extends('frontend.layouts.master')

@section('main-content')
    <div class="container">
        @foreach ($posts as $post)
            <div class="row">
                <p>{{ $post->title }}</p>
                <a href="{{ route('categories.index', $post->category->id) }}"> <mark>{{ $post->category->name }}</mark> </a>
                <p>{{ $post->slug }}</p>
                <p>{{ $post->description }}</p>
                <p>{{ $post->status }}</p>
                <a href="{{ route('posts.show', $post->id) }}">View Post</a>
                
            </div>
            <hr>
        @endforeach
    </div>
@endsection

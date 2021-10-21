@extends('frontend.layouts.master')

@section('main-content')
    <div class="container">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->slug }}</p>
        <p>{{ $post->description }}</p>
        <p>{{ $post->status }}</p>
        <br>
        {{-- Start For many to many --}}
        @foreach ($post->tags as $tag)
            <mark>{{ $tag->name }}</mark> |
        @endforeach
        {{-- End for many to many --}}
        <hr>
        <h3>Comments:</h3>
        @foreach ($post->comments as $comment)
            <div class="row">
                <p>{{ $comment->comment }} at {{ $comment->post->title }} by - {{ $comment->user->name }}</p>
                
                <p>at - {{ $comment->created_at->diffForHumans() }}</p>
            </div>
            <div style="width: 150px; height: auto;border-bottom:1px dotted green;"></div>
        @endforeach
    </div>
@endsection

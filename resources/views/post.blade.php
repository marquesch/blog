@extends('layouts/layout')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <body>
        <article>
            <h1>{{ $post->title }}</h1>
            <p>By <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a> at {{ $post->published_at }}</p>
            <p>{{ $post->body }}</p>
        </article>
    </body>
    <a href="/">Back</a>
@endsection

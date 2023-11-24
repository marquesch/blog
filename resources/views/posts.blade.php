@extends('layouts/layout')

@section('contents')

@include('_header')

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    <x-featured-post-card />
    <div class="lg:grid lg:grid-cols-2">
        <x-post-card />
        <x-post-card />
    </div>

    <div class="lg:grid lg:grid-cols-3">
        <x-post-card />
        <x-post-card />
        <x-post-card />
    </div>
</main>

    {{-- <body>
        @foreach($posts as $post)
            <article>
                <a href="/post/{{ $post->slug }}">
                    <h1>{{ $post->title }}</h1>
                </a>
                <p>By <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a> at {{ $post->published_at }}</p>
                <p>{{ $post->body }}</p>
            </article>
        @endforeach
    </body> --}}
@endsection

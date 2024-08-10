@extends('layout.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <p>By Trafagraw Law in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
</article>

<a href="/blog" type="button">Back to Post</a>

@endsection

@extends('layout.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    {!! $post->body !!}
</article>

<a href="/blog" type="button">Back to Post</a>

@endsection

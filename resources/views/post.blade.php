@extends('layout.main')

@section('container')
<article>
    <h2>{{ $post['title'] }}</h2>
    <h5>{{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
</article>

<a href="/blog" type="button">Back to Post</a>

@endsection
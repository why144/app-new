@extends('layout.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                <img src="https://picsum.photos/1200/400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid"> 

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                
            
            <a href="/blog" type="button">Back to Post</a>
        </div>
    </div>
</div>

@endsection

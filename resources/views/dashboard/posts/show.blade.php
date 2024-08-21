@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            
                <h2 class="mb-3">{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success">Back to MyPost</a>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
                <img src="https://picsum.photos/1200/400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3"> 

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                
            
            <a href="/dashboard/posts" type="button">Back to Post</a>
        </div>
    </div>
</div>

@endsection
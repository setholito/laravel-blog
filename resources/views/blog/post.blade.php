@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <p>
                <span class="label label-primary">{{ count($post->likes) }}</span> Likes | <a href="{{ route('blog.post.like', ['id' => $post->id]) }}">Like</a>
            </p>
            <a href="{{ route('blog.index') }}">Back to Posts</a>
        </div>
    </div>
@endsection
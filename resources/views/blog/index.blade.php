@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h1>Welcome</h1>
        </div>
    </div>
    @foreach($posts as $post)
        <div class="row">
            <div class="col-xs-12">
                <h3 class="post-title">{{ $post->title }}</h3>
                <p>{{ $post->content }}</p>
                <p>
                    @foreach($post->tags as $tag)
                        <span class="label label-default">{{ $tag->name }}</span>
                    @endforeach
                </p>
                <a href="{{ route('blog.post', ['id' => $post->id]) }}" class="btn btn-primary btn-sm">View <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-xs-12 text-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
@extends('layouts.master')

@section('content')
    @if (Session::has('info'))
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-info">
                {{ Session::get('info') }}
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-xs-12">
            <h1>
                Admin Page
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-3">
            <ul class="list-group big-buttons">
                <li class="list-group-item">
                    <a href="{{ route('admin.create') }}"><span class="glyphicon glyphicon-pencil"></span>Write a Post</a>
                </li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-9">
            @if (sizeof($posts) == 0)
                <div class="alert alert-info">
                    <a href="{{ route('admin.create') }}">No Posts. Go write one!</a>
                </div>
            @else
                <ul class="list-group">
                    @foreach($posts as $post)
                    <li class="list-group-item">
                        <a href="{{ route('blog.post', ['id' => $post->id]) }}"><h5>{{ $post->title }}</h5></a>
                        <div class="btn-container">
                            <a href="{{ route('admin.edit', ['id' => $post->id]) }}" class="btn btn-warning btn-sm">
                                <span class="glyphicon glyphicon-wrench"></span>
                            </a>
                            <a href="{{ route('admin.delete', ['id' => $post->id]) }}" class="btn btn-danger btn-sm">
                                <span class="glyphicon glyphicon-remove-sign"></span>
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
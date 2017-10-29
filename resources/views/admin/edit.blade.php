@extends('layouts.master')

@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-xs-12">
            <h3>
                Edit page
            </h3>
            <form action="{{ route('admin.update') }}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input
                        type="text"
                        class="form-control"
                        id="title"
                        name="title"
                        value="{{ $post->title }}"
                    />
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea
                        type="text"
                        class="form-control"
                        id="content"
                        name="content"
                        value="{{ $post->content }}"
                    />{{ $post->content }}</textarea>
                </div>
                @foreach($tags as $tag)
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'checked' : '' }}> {{ $tag->name }}
                        </label>
                    </div>
                @endforeach
                <input type="hidden" name="id" value="{{ $postId }}">
                <button class="btn btn-success" type="submit">
                    {{ csrf_field() }}
                    <span class="glyphicon glyphicon-save"></span> Save
                </button>
            </form>
        </div>
    </div>
@endsection
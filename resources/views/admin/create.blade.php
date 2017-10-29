@extends('layouts.master')

@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-xs-12">
            <h3>
                Create Page
            </h3>
            <form action="{{ route('admin.create') }}" method="post">
                <section>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input
                            id="title"
                            type="text"
                            class="form-control"
                            name="title"
                            value=""
                        />
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea
                            id="content"
                            class="form-control"
                            name="content"
                        ></textarea>
                    </div>
                    <h4>
                        Tags
                    </h4>
                    @foreach($tags as $tag)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->name }}
                            </label>
                        </div>
                    @endforeach
                </section>
                <section>
                    {{ csrf_field() }}
                    <button class="btn btn-primary" type="submit">Create</button>
                </section>
            </form>
        </div>
    </div>
@endsection
@extends('layouts.admin')

@section('content')
    <h1>Edit Post</h1>

    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" >
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="4" >{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
@endsection

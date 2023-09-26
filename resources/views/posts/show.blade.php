@extends('layouts.admin')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <h2>Comments</h2>
    @foreach($post->comments as $comment)
        <div class="comment">
            <p><strong>{{ $comment->author_name }}</strong></p>
            <p>{{ $comment->content }}</p>
            <form method="POST" action="{{ route('comments.destroy', $comment) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Comment</button>
            </form>
        </div>
    @endforeach

    <h2>Add a Comment</h2>
    <form method="POST" action="{{ route('comments.store', $post) }}">
        @csrf
        <div class="form-group">
            <label for="author_name">Your Name</label>
            <input type="text" name="author_name" id="author_name" class="form-control" >
        </div>
        <div class="form-group">
            <label for="comment_content">Comment</label>
            <textarea name="content" id="comment_content" class="form-control" rows="3" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Comment</button>
    </form>
@endsection

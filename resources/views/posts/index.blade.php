@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>All Posts</h1>

        <a class="btn btn-primary mb-3" href="{{ route('posts.create') }}">Create New Post</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-info">View</a>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit</a>
                            <form class="d-inline" method="POST" action="{{ route('posts.destroy', $post) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="{{ $posts->previousPageUrl() }}">Previous</a></li>
                @for ($i = 1; $i <= $posts->lastPage(); $i++)
                    <li class="page-item {{ $i == $posts->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item"><a class="page-link" href="{{ $posts->nextPageUrl() }}">Next</a></li>
            </ul>
        </nav>
    </div>
@endsection

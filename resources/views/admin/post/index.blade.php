@extends('layouts.admin')
@section('content')
    <p>Posts</p>
    <a href="{{ route('admin.post.create') }}">Create post</a>
    <ul style="padding:20px 0 0 0">
        @foreach ($posts as $post)
            <li
                style="border:1px solid RGBA(0,0,0,.3);border-radius:4px;margin-bottom:10px;list-style-type:none;padding:10px;box-shadow:0 0 5px 0 RGBA(0,0,0,.3)">
                <p>{{ $post->title }}</p>
                <div style="display:flex;column-gap:20px;">
                    <a href="{{ route('post.show', $post) }}">Open</a>
                    <a href="{{ route('admin.post.edit', $post) }}">Edit</a>
                    <form action="{{ route('admin.post.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection

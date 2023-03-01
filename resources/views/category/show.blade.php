@extends('layouts.main')
@section('content')
    <h2>{{ $category->title }}</h2>
    <h3>Posts</h3>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('post.show', $post) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection

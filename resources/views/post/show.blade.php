@extends('layouts.main')
@section('content')
    <div style="margin-bottom:20px;">
        <a href="{{ route('post.index') }}">Back</a>
    </div>
    <div style="margin-bottom:20px;">
        <h2>{{ $post->title }}</h2>
        <p>Content: {{ $post->content }}</p>
        <p>Category: {{ $post->category->title }}</p>
        <p>Tags:
            @foreach ($post->tags as $key => $tag)
                {{ $tag->title }}{{ count($post->tags) - 1 > $key ? ',' : '' }}
            @endforeach
        </p>
    </div>
@endsection

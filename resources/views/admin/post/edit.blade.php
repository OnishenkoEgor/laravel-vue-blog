@extends('layouts.admin')
@section('content')
    <div style="margin-bottom:20px">
        <a href="{{ route('admin.post.index') }}">Back</a>
    </div>
    <form action="{{ route('admin.post.update', $post) }}" method="POST">
        @csrf
        @method('patch')
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
        <label for="conten">Content</label>
        <textarea name="content" id="content" cols="30" rows="10">{{ $post->content }}</textarea>
        <label for="image">Image</label>
        <input type="text" name="image" id="image" value="{{ $post->image }}">
        <select name="category_id" id="category">
            @foreach ($categories as $key => $category)
                <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->title }}
                </option>
            @endforeach
        </select>
        <label for="tags">Tags</label>
        <select name="tags[]" id="tags" multiple>
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}"
                    {{ in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }}>
                    {{ $tag->title }}</option>
            @endforeach
        </select>
        <button type="submit">Update</button>
    </form>
@endsection

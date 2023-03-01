@extends('layouts.admin')
@section('content')
<form action="{{ route('admin.post.store') }}" method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value={{ old('title') }}>
    @error('title')
        <p style="color:red;">{{ $message }}</p>
    @enderror
    <label for="conten">Content</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>
    @error('content')
        <p style="color:red;">{{ $message }}</p>
    @enderror
    <label for="image">Image</label>
    <input type="text" name="image" id="image">
    <label for="category_id">Category</label>
    <select name="category_id" id="category_id">
        @foreach ($categories as $category)
            <option {{ old('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">
                {{ $category->title }}</option>
        @endforeach
    </select>
    @error('category_id')
        <p style="color:red;">{{ $message }}</p>
    @enderror
    <label for="tags">Tags</label>
    <select name="tags[]" id="tags" multiple>
        @foreach ($tags as $tag)
            <option {{ is_array(old('tags')) && in_array($tag->id, old('tags')) ? 'selected' : '' }}
                value="{{ $tag->id }}">
                {{ $tag->title }}</option>
        @endforeach
    </select>
    <button type="submit">Create</button>
</form>@endsection
@extends('layouts.main')
@section('content')
    <form action="{{ route('tag.store') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <button type="submit">Create</button>
    </form>
@endsection

@extends('layouts.main')
@section('content')
    <h2>Tags</h2>
    <div style="margin-bottom:15px">
        <a href="{{ route('tag.create') }}">Create</a>
    </div>
    @if (count($tags))
        <ul>
            @foreach ($tags as $tag)
                <li>
                    <a href="{{ route('tag.show', $tag->id) }}">{{ $tag->title }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Not found tags</p>
    @endif
@endsection

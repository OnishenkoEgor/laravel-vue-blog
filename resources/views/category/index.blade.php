@extends('layouts.main')
@section('content')
    <h2>Categories</h2>
    <div style="margin-bottom:20px">
        <a href="{{ route('category.create') }}">Create</a>
    </div>
    @if (count($categories))
        <ul>
            @foreach ($categories as $category)
                <li>
                    <a href="{{ route('category.show', $category->id) }}">
                        {{ $category->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Not found categories</p>
    @endif
@endsection

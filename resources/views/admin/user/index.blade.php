@extends('layouts.admin')
@section('content')
    <p>Users</p>
    <a href="{{ route('admin.user.create') }}">Create user</a>
    <ul style="padding:20px 0 0 0">
        @foreach ($users as $user)
            <li
                style="border:1px solid RGBA(0,0,0,.3);border-radius:4px;margin-bottom:10px;list-style-type:none;padding:10px;box-shadow:0 0 5px 0 RGBA(0,0,0,.3)">
                <p>{{ $user->name }}</p>
                <div style="display:flex;column-gap:20px;">
                    <a href="{{ route('user.show', $user) }}">Open</a>
                    <a href="{{ route('admin.user.edit', $user) }}">Edit</a>
                    <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection

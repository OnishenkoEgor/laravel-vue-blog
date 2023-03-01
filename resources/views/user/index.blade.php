@extends('layouts.main')
@section('content')
    <h2>Users</h2>
    @if (count($users))
        <ul>
            @foreach ($users as $user)
                <li>
                    <a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Not found users</p>
    @endif
@endsection

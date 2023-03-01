@extends('layouts.admin')
@section('content')
    <h2>Edit user</h2>
    <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
        @csrf
        @method('patch')
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="{{ $user->password }}">
        <button type="submit">Update</button>
    </form>
@endsection

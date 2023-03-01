@extends('layouts.admin')
@section('content')
    <h2>Create user</h2>
    <form action="{{ route('admin.user.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <select name="role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
        <button type="submit">Create</button>
    </form>
@endsection

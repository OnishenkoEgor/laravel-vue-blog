@extends('layouts.main')
@section('content')
    <div style="margin-bottom:20px">
        <a href="{{ route('user.index') }}">Back</a>
    </div>
    <table style="margin-bottom:20px;">
        <tr>
            <td>Name</td>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <td>Password</td>
            <td>{{ $user->password }}</td>
        </tr>
    </table>
@endsection

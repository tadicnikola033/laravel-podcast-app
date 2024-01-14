<!-- resources/views/users/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>

    <form method="post" action="{{ route('users.update', ['user' => $user->id]) }}">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $user->name }}" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password">
        <br>
        <button type="submit">Update User</button>
    </form>
@endsection

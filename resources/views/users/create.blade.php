<!-- resources/views/users/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create User</h1>

    <form method="post" action="{{ route('users.store') }}">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Create User</button>
    </form>
@endsection

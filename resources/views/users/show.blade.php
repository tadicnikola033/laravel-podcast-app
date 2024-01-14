<!-- resources/views/users/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>User Details</h1>

    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Created At: {{ $user->created_at }}</p>
@endsection

@extends('layouts.app')

@section('content')
    <h1>Users</h1>

    @foreach($users as $user)
        <p>{{ $user->name }} - {{ $user->email }}</p>
    @endforeach
@endsection

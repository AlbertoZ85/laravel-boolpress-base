@extends('layouts.app')
@section('title', 'Homepage')

@section('main')
    @if (session('status'))
        <div>
            <p>Deleted user ID: {{session('status')}}</p>
        </div>
    @endif
    
    <h2>Users' list</h2>
    @foreach ($users as $user)
        <ul>
            <li>Name: {{$user->name}}</li>
            <li>Email: {{$user->email}}</li>
            <li>Password: {{$user->password}}</li>
            <li><a href="{{route('users.show', $user->id)}}">Details</a></li>
        </ul>
    @endforeach
@endsection
@extends('layouts.app')
@section('title', 'Homepage')

@section('main')
    @foreach ($users as $user)
        <ul>
            <li>Name: {{$user->name}}</li>
            <li>Email: {{$user->email}}</li>
            <li>Password: {{$user->password}}</li>
            <li><a href="{{route('users.show', $user->id)}}">Details</a></li>
        </ul>
    @endforeach
@endsection
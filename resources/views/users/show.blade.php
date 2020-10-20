@extends('layouts.app')
@section('title', "User details - $user->name")

@section('main')
    <h2>User details</h2>

    <h3>Name: {{$user->name}}</h3>
    <p>Phone: {{$user->info->phone}}</p>
    <img src="{{$user->info->avatar}}" alt="{{$user->name}}_avatar">
@endsection
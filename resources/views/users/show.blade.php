@extends('layouts.app')
@section('title', "User details - $user->name")

@section('main')
    <h2>User details</h2>

    <h3>Name: {{$user->name}}</h3>
    <p>Phone: {{$user->info->phone}}</p>
    <img src="{{$user->info->avatar}}" alt="{{$user->name}}_avatar">

    <form action="{{route('users.destroy', $user->id)}}" method="post">
        @csrf
        @method('DELETE')

        <button type="submit">Delete user</button>
    </form>

    <h2>{{$user->name}}'s posts</h2>

    @foreach ($user->posts as $post)
        <h4>{{$post->title}}</h4>
        <p>{{$post->body}}</p>
    @endforeach
@endsection
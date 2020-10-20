@extends('layouts.app')
@section('title', 'Posts list')

@section('main')
    @if (session('status'))
        <div>
            <p>Well done {{session('status')}}, post inserted!</p>
        </div>
    @endif

    <h2>Posts' list</h2>
    @foreach ($posts as $post)
        <div>
            <h2>{{$post->title}}</h2>
            <p>{{$post->body}}</p>
            <p><strong>{{$post->user->name}}</strong> - <em>{{$post->created_at}}</em></p>
            <hr>
        </div>
    @endforeach
@endsection
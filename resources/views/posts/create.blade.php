@extends('layouts.app')
@section('title', 'Insert post')

@section('main')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('posts.store')}}" method="post">
        @csrf

        <select name="user_id">
            @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>

        <label for="title">Title</label>
        <input type="text" id="title" name="title" placeholder="Insert title" autocomplete="off">
        <textarea name="body" cols="30" rows="10" placeholder="Insert text" autocomplete="off"></textarea>

        <button type="submit">Insert post</button>
    </form>
@endsection
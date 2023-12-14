@extends('layouts.app')

@section('title', 'user profile details')

@section('content')
    <ul>
        <h1 class="large-title">User: {{ $user->name }}</h1>
        <li>email: {{ $user->email }}</li>
        <li>role: {{ $user->role }}</li>
    </ul>

    <h1 class="small-title">Comments ({{ count($comments) }})</h1>

    <ul id = 'commentList'>
        @foreach ($comments as $comment)
        <li style="background-color: #4a6283; color: #FFFFFFF;">
            <span>Posted on: {{$comment->player->in_game_name}} | Created at: {{ $comment->created_at }}</span>
            
        </li>
        <li>{{$comment->comment}}</li>
        @endforeach
    </ul>
@endsection
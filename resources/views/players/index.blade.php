@extends('layouts.app')

@section('title', 'players')

@section('content')
    <p>Here are all the players:</p>
    <ul>
        @foreach ($players as $player)
            <li>{{ $player->name }}</li>
        @endforeach
    </ul>
@endsection

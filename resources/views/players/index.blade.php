@extends('layouts.app')

@section('title', 'players')

@section('content')
    <ul>
        @foreach ($players as $player)
            <li>{{ $player->in_game_name }}</li>
        @endforeach
    </ul>
@endsection

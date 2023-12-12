@extends('layouts.app')

@section('title', 'players')

@section('content')
    <ul>
        @foreach ($players as $player)
            <li>{{ $player->in_game_name}} ({{ $player->id}})
                <a href="{{ route('players.show', ['player' => $player]) }}">details</a>
            </li>
        @endforeach
    </ul>
@endsection

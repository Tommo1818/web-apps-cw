@extends('layouts.app')

@section('title', 'players')

@section('content')
    <ul>
        @foreach ($players as $player)
            <li>{{ $player->in_game_name}}
                <a href="{{ route('players.show', ['player' => $player]) }}" class="button">details</a>
            </li>
        @endforeach
    </ul>
@endsection

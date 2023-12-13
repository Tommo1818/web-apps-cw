@extends('layouts.app')

@section('title', 'player details')

@section('content')
    <ul>
        <h1 class = "large-title">Player Details</h1>
        <li>in_game_name: {{ $player->in_game_name }}</li>
        <li>date_of_birth: {{ $player->date_of_birth }}</li>
        <li>country: {{ $player->country }}</li>
        <li>team_name: {{ $player->team->name }}</li>
        <button class="button" onclick="window.location='{{ route('players.index')}}'">back to index</button>
    </ul>
    <form action="{{ route('players.destroy', $player->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="button" style="background-color: #FF9393; color: #ffffff;">Delete Player</button>
    </form>
@endsection
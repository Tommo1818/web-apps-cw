@extends('layouts.app')

@section('title', 'player details')

@section('content')
    <ul>
        <li>{{ $player->in_game_name }}</li>
        <li>{{ $player->date_of_birth }}</li>
        <li>{{ $player->country }}</li>
        <li>{{ $player->team->name }}</li>
    </ul>
@endsection
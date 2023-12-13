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

    @if (Auth::user()->role == 'admin')
        <a href="{{ route('players.create') }}" class="button" style="background-color: #A6FFA8; color: #000000;">add player</a>
    @endif
    {{ $players->links() }}
@endsection

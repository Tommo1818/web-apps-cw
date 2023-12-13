@extends('layouts.app')

@section('title', 'team details')

@section('content')
    <ul>
        <h1 class = "large-title">Team Details</h1>
        <li>{{ $team->name }}</li>
        <li>{{ $team->country }}</li>
        <li>{{ $team->players->count() }}</li>
        <h1 class = "small-title">Players</h1>
        <ul>
            @foreach ($team->players()->paginate(10) as $player)
                <li>{{ $player->in_game_name }}</li>
            @endforeach
        </ul>
        {{ $team->players()->paginate(10)->links() }}
        <button class="button" onclick="window.location='{{ route('teams.index')}}'">back to index</button>
    </ul>
@endsection

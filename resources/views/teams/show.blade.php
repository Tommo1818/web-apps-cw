@extends('layouts.app')

@section('title', 'team details')

@section('content')
    <ul>
        <h1 class = "large-title">Team Details</h1>
        <li><strong>Team Name:</strong> {{ $team->name }}</li>
        <li><strong>Country:</strong> {{ $team->country }}</li>
        <li><strong>Number of Players:</strong> {{ $team->players->count() }}</li>
        <li><strong>Sponsor:</strong> {{ $sponsor->name ?? 'None' }}</li>
        <h1 class = "small-title">Players</h1>
        <ul>
            @foreach ($team->players()->paginate(10) as $player)
                <li>{{ $player->in_game_name }}</li>
            @endforeach
        </ul>
        @if (Auth::user()->role == 'admin')
            <form action="{{ route('teams.edit', $team->id) }}" method="GET">
                @csrf
                <button class="button" style="background-color: #A6FFA8; color: #000000;">Edit Team</button>
            </form>
            <form action="{{ route('teams.destroy', $team->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="button" style="background-color: #FF9393; color: #000000;">Delete Team</button>
            </form>
        @endif
        {{ $team->players()->paginate(10)->links() }}
        <button class="button" onclick="window.location='{{ route('teams.index')}}'">back to index</button>
    </ul>
@endsection

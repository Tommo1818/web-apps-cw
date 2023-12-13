@extends('layouts.app')

@section('title', 'add player')

@section('content')
    <form action="{{ route('players.store') }}" method="POST">
        @csrf
        <h1 class="large-title">Add Player</h1>
        <div>
            <label for="in_game_name">in game name</label>
            <input type="text" name="in_game_name" id="in_game_name" class="input-text" value="{{ old('in_game_name') }}">
        </div>
        <div>
            <label for="date_of_birth">date of birth</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="input-text" value="{{ old('date_of_birth') }}">
        </div>
        <div>
            <label for="country">country</label>
            <input type="text" name="country" id="country" class="input-text" value="{{ old('country') }}">
        </div>
        <div>
            <label for="team_id">team</label>
            <select name="team_id" id="team_id" class="input-text">
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}" {{ old('team_id') == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit" class="button">add player</button>
        </div>
    </form>
    <button class="button" onclick="window.location='{{ route('players.index')}}'">back to index</button>
@endsection
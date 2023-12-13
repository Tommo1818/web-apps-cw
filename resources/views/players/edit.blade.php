@extends('layouts.app')

@section('title', 'edit player')

@section('content')
    <h1 class="small-title">Editing player: {{ $player->in_game_name }}</h1>
    <form action="{{ route('players.update', $player->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Add your form fields here -->
        <div class="form-group">
            <label for="name">player Name</label>
            <input type="text" class="input-text" id="in_game_name" name="in_game_name" value="{{ old('name', $player->in_game_name) }}">
        </div>
        <div>
            <label for="date of birth">date of birth</label>
            <input type="text" class="input-text" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', $player->date_of_birth) }}"> 
        </div>
        <div class="form-group">
            <label for="country">player Country</label>
            <input type="text" class="input-text" id="country" name="country" value="{{ old('country', $player->country) }}">
        </div>
        <div>
            <label for="team">team</label>
            <select name="team_id" id="team" class="input-text">
                @foreach($teams as $team)
                    <option value="{{ $team->id }}" @if($team->id == $player->team_id) selected @endif>{{ $team->name }}</option>
                @endforeach
            </select>
            @error('team')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="button" style="background-color: #A6FFA8; color: #000000;">Submit</button>
    </form>
@endsection
    <form action="{{ route('players.update

@extends('layouts.app')

@section('title', 'edit team')

@section('content')
    <h1 class="small-title">Editing Team: {{ $team->name }}</h1>
    <form action="{{ route('teams.update', ['team' => $team->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $team->id }}">
        <div class="form-group">
            <label for="name">Team Name</label>
            <input type="text" class="input-text" id="name" name="name" value="{{ old('name', $team->name) }}">
        </div>
        <div class="form-group">
            <label for="country">Team Country</label>
            <input type="text" class="input-text" id="country" name="country" value="{{ old('country', $team->country) }}">
        </div>
        <div>
            <label for="sponsor">sponsor</label>
            <select name="sponsor_id" id="sponsor" class="input-text">
                @foreach($sponsors as $sponsor)
                    <option value="{{ $sponsor->id }}" @if($sponsor->id == $team->sponsor_id) selected @endif>{{ $sponsor->name }}</option>
                @endforeach
            </select>
            @error('sponsor')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="button" style="background-color: #A6FFA8; color: #000000;">Submit</button>
    </form>
@endsection


@extends('layouts.app')

@section('title', 'teams')

@section('content')
    <ul>
        @foreach ($teams as $team)
            <li>{{ $team->name}}
                <a href="{{ route('teams.show', ['team' => $team]) }}" class="button">details</a>
            </li>
        @endforeach
    </ul>
    <a href = "{{ route('teams.create') }}" class="button">add team</a>
@endsection


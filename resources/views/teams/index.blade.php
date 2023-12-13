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
    @if (Auth::user()->role == 'admin')
        <a href = "{{ route('teams.create') }}" class="button" style="background-color: #A6FFA8; color: #000000;">add team</a>
    @endif
    {{ $teams->links() }}
@endsection


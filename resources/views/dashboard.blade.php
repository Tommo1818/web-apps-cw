@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div>
        @if (auth()->check())
            <h1>Hello, {{ auth()->user()->name }}!</h1>
            <p>You're logged in.</p>
        @endif
    </div>

@endsection

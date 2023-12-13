@extends('layouts.app')

@section('title', 'add team')

@section('content')
    <form action="{{ route('teams.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="input-text">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="country">country</label>
            <input type="text" name="country" id="country" value="{{ old('country') }}" class="input-text">
            @error('country')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="sponsor">sponsor</label>
            <select name="sponsor_id" id="sponsor" class="input-text">
                @foreach($sponsors as $sponsor)
                    <option value="{{ $sponsor->id }}">{{ $sponsor->name }}</option>
                @endforeach
            </select>
            @error('sponsor')
                <p>{{ $message }}</p>
            @enderror
        </div>
        
        <button class="button" type="submit">add team</button>
    </form>
    <button class="button" onclick="window.location='{{ route('teams.index')}}'">back to index</button>
@endsection
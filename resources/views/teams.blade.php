
@extends ('layouts.app')

@section ('title', 'team')   <!-- this is the title of the page -->

@section ('content')        <!-- this is the content of the page -->
    @if($team)
        <h1>{{$team}} is awesome!!!</h1>
        <p>{{$team}} are the best team ever!!</p>
        <p>{{$team}} have all the bestest players!!!1!</p>
        <p>and {{$team}} will win the cs2 major!"£21!!!</p>
    @else
        <h1>no team selected</h1>
    @endif
@endsection
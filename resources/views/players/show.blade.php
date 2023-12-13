@extends('layouts.app')

@section('title', 'player details')

@section('content')
    <ul>
        <h1 class = "large-title">Player Details</h1>
        <li>in_game_name: {{ $player->in_game_name }}</li>
        <li>date_of_birth: {{ $player->date_of_birth }}</li>
        <li>country: {{ $player->country }}</li>
        <li>team_name: {{ $player->team->name }}</li>
    </ul>
    @if (Auth::user()->role == 'admin')
        <form action="{{ route('players.edit', $player->id) }}" method="GET">
            @csrf
            <button class="button" style="background-color: #A6FFA8; color: #000000;">Edit Player</button>
        </form>
        <form action="{{ route('players.destroy', $player->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="button" style="background-color: #FF9393; color: #000000;">Delete Player</button>
        </form>
    @endif

    <h1 class="small-title">Add Comment</h1>

    <div id = "app">
    <input type="text" style="background-color: #FFFFFF; color: #000000" v-model = 'commentIn'>
    <button class="button" @click="addComment()">Add Comment</button>

    <h1 class="small-title">Comments ({{ count($comments) }})</h1>
    <ul>
        @foreach ($comments as $comment)
        <li style="background-color: #4a6283; color: #FFFFFFF;">{{$comment->user->name}}:</li>
        <li>{{$comment->comment}}</li>
        @endforeach
    </ul>
    </div>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                comments: [],
                commentIn: '',
                authid: {{ Auth::user()->id }}
            },
            methods: {
                addComment() {
                    axios.post("{{route('comments.store')}}", {
                        comment: this.commentIn,
                        user_id: {{ Auth::user()->id }},
                        player_id: {{ $player->id }},
                    })
                    .then(response => {
                        this.comments.push(response.data);
                        this.commentIn = '';
                    })
                    .catch(error => {
                        console.log(error);
                    });
                }
            }
        });
    </script>

    <ul>
    <button class="button" onclick="window.location='{{ route('players.index')}}'">back to index</button>
    </ul>
    
@endsection
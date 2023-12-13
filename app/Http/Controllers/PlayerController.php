<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use App\Models\Team;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::paginate(10);
        return view('players.index', ['players' => $players]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::all();
        return view('players.create', ['teams' => $teams]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'in_game_name' => 'required|max:255',
            'date_of_birth' => 'required|date',
            'team_id' => 'required|integer',
            'country' => 'required|max:255',
        ]);
        $a = new Player;
        $a->in_game_name = $validated['in_game_name'];
        $a->date_of_birth = $validated['date_of_birth'];
        $a->team_id = $validated['team_id'];
        $a->country = $validated['country'];
        $a->save();
        session()->flash('message', 'Player added successfully!');
        return redirect()->route('players.index');
    }

/** 
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::all();
        $comments = Comment::where('player_id', $id)->get();
        $player = Player::findOrFail($id);
        return view('players.show', ['player' => $player, 'comments' => $comments, 'users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teams = Team::all();
        $player = Player::findOrFail($id);
        return view('players.edit', ['player' => $player], ['teams' => $teams]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'in_game_name' => 'required|max:255',
            'date_of_birth' => 'required|date',
            'team_id' => 'required|integer',
            'country' => 'required|max:255',
        ]);
        $a = Player::findOrFail($id);
        $a->in_game_name = $validated['in_game_name'];
        $a->date_of_birth = $validated['date_of_birth'];
        $a->team_id = $validated['team_id'];
        $a->country = $validated['country'];
        $a->save();
        session()->flash('message', 'Player updated successfully!');
        return redirect()->route('players.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $player = Player::findOrFail($id);
        $player->delete();
        session()->flash('message', 'Player deleted successfully!');
        return redirect()->route('players.index');
    }
}

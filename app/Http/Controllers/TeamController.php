<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', ['teams' => $teams]);
    }
    
    public function create()
    {
        $sponsors = Sponsor::all();
        return view('teams.create', ['sponsors' => $sponsors]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'country' => 'required|max:255',
            'sponsor_id' => 'integer',
        ]);
        $a = new Team;
        $a->name = $validated['name'];
        $a->country = $validated['country'];
        $a->sponsor_id = $validated['sponsor_id'];
        $a->save();
        session()->flash('message', 'Team added successfully!');
        return redirect()->route('teams.index');
        }

    /** 
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $team = Team::findOrFail($id);
        return view('teams.show', ['team' => $team]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

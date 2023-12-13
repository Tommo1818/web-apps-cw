<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::paginate(10);
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
            'sponsor_id' => 'integer|nullable',
        ]);
        $a = new Team;
        $a->name = $validated['name'];
        $a->country = $validated['country'];
        $a->save();
        $s = Sponsor::findOrFail($validated['sponsor_id']);
        $s->team_id = $a->id;
        $s->save();
        session()->flash('message', 'Team added successfully!');
        return redirect()->route('teams.index');
        }

    /** 
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sponsors = Sponsor::all();
        $team = Team::findOrFail($id);
        return view('teams.show', ['team' => $team], ['sponsor' => Sponsor::where('team_id', $team->id)->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sponsors = Sponsor::all();
        $team = Team::findOrFail($id);
        return view('teams.edit', ['team' => $team], ['sponsors' => $sponsors]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'country' => 'required|max:255',
            'sponsor_id' => 'integer|nullable',
        ]);
        $a = Team::findOrFail($id);
        $a->name = $validated['name'];
        $a->country = $validated['country'];
        $a->save();
        $s = Sponsor::findOrFail($validated['sponsor_id']);
        $s->team_id = $a->id;
        $s->save();
        session()->flash('message', 'Team updated successfully!');
        return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        session()->flash('message', 'Team deleted successfully!');
        return redirect()->route('teams.index');
    }
}

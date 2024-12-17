<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $query = Team::query();

        if ($request->has('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('jabatan', 'like', "%{$search}%");
        }

        $teams = $query->latest()->get();
        return view('team.index', compact('teams'));
    }

    public function create()
    {
        return view('team.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teams',
            'phone' => 'required|string|max:15',
            'jabatan' => 'required|string|max:255',
        ]);

        Team::create($validated);
        return redirect()->route('team.index')->with('success', 'Team member added successfully');
    }

    public function show(Team $team)
    {
        return view('team.show', compact('team'));
    }

    public function edit(Team $team)
    {
        return view('team.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teams,email,' . $team->id,
            'phone' => 'required|string|max:15',
            'jabatan' => 'required|string|max:255',
        ]);

        $team->update($validated);
        return redirect()->route('team.index')->with('success', 'Team member updated successfully');
    }

    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('team.index')->with('success', 'Team member deleted successfully');
    }

    public function report()
    {
        $teams = Team::all();
        return view('team.report', compact('teams'));
    }
}

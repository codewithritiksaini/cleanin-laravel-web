<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    // 🔹 Show all teams
    public function index()
    {
        $teams = Team::latest()->get();
        return view('site.teams.index', compact('teams'));
    }

    public function detail($slug)
    {
        $team_details = Team::latest()->get();
        $team = Team::where('slug', $slug)->firstOrFail();
        return view('site.teams.detail', compact('team', 'team_details'));
    }
}

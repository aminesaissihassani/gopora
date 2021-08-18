<?php

namespace App\Http\Controllers;

use App\Models\ESport;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create',[
            'esports' => ESport::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'e_sport_id' => 'required',
            'slug' => 'required|unique:teams,slug|max:255',
            'name' => 'required|min:3|max:255',
            'region' => 'required',
            'logo' => 'required',
            'founded_at' => 'required|date'
        ]);

        if($request->hasFile('logo'))
        {
            $path = $request->file('logo')->store('logos', 'public');
            $path = explode('/', $path);
        }

        $team = new Team();

        $team->e_sport_id = $request->e_sport_id;
        $team->slug = $request->slug;
        $team->name = $request->name;
        $team->region = $request->region;
        $team->logo = $path[1];
        $team->founded_at = $request->founded_at;

        $team->save();

        return redirect('teams/'. $request->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('teams.show', [
            'team' => $team
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('teams.edit',[
            'team' => $team,
            'esports' => ESport::latest()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $this->validate($request, [
            'e_sport_id' => 'required',
            'name' => 'required|min:3|max:255',
            'region' => 'required',
            'logo' => 'required',
            'founded_at' => 'required|date'
        ]);

        if($request->hasFile('logo'))
        {
            $path = $request->file('logo')->store('logos', 'public');
            $path = explode('/', $path);
        }

        $team->e_sport_id = $request->e_sport_id;
        $team->name = $request->name;
        $team->region = $request->region;
        $team->logo = $path[1];
        $team->founded_at = $request->founded_at;

        $team->update();

        return redirect('teams/'. $team->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route("home")->with('success', 'Team Deleted!');
    }
}

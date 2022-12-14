<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Banner;
use App\Models\Student;
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
        $teams = Team::all();

        $banner = Banner::inRandomOrder()->first();

        return view('dashboard')
            ->with('teams',$teams)
            ->with('banner', $banner);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = new Team();
        return view('teams.create')
            ->with('team',$team);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $teamRequest)
    {
        $request = $teamRequest->validated();

        $team = Team::create([
            'subject' => $teamRequest->subject,
            'year' => $teamRequest->year,
        ]);

        session()->flash('status','Cadastrado com sucesso');
        return to_route('teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        $students = Student::all()->where('team_id',$team->id);
        return view('teams.view')
            ->with('team',$team)
            ->with('students',$students);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('teams.edit')->with('team',$team);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, Team $team)
    {
        $data = $request->validated();
        $team->update($data);

        session()->flash('status','editado com successo');
        return to_route('teams.index');
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
        session()->flash('status','deletado com successo');
        return to_route('teams.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

use Redirect;

class ProjectsController extends Controller
{

    protected $rules = [
        'name' => ['required', 'min:3'],
        'slug' => ['required'],
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     //   $this->middleware('auth');
    }

    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }


    public function create()
    {
        return view('projects.create');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        $input = Input::all();
        Project::create( $input );

        return Redirect::route('projects.index')->with('message', 'Project created');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Project $project
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function update(Project $project, Request $request)
    {
        $this->validate($request, $this->rules);
        $input = array_except(Input::all(), '_method');
        $project->update($input);

        return Redirect::route('projects.show', $project->slug)->with('message', 'Project updated.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return Redirect::route('projects.index')->with('message', 'Project deleted.');
    }

}

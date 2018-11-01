<?php

namespace App\Http\Controllers;

use App\Project; // instead of using 'App\Projects::all()'
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() 
    {
        $projects = Project::all();

        // return $projects;

        return view('projects.index', compact('projects'));
    }

    public function create() 
    {
        return view('projects.create');
    }

    public function store() 
    {
        // return request()->all();

        // Couple way to store data

        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('/projects'); // Laravel Helpers
    }

    public function edit($id) 
    {
        // return $id;
        $project = Project::find($id);
        return view('projects.edit', compact('project'));
    }

    public function update($id) 
    {
        // dd('im debugger!');
        // dd(request()->all());
        $project = Project::find($id);
        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('/projects');
    }
    public function destroy($id) 
    {
        // dd('im debugger!');
        // dd(request()->all());
        Project::findOrFail($id)->delete();
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();

        return redirect('/projects');
    }
}

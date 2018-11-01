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

     public function show(Project $project) 
    {
        return view('projects.show', compact('project'));
    }

    public function store() 
    {
        // return request()->all();

        // Couple way to store data

        // ВАРИАНТ 1
        // $project = new Project();
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();

        // ВАРИАНТ 2
        Project::create([
            'title' => request('title'),
            'description' => request('description')
        ]);

        // ВАРИАНТ 3
        Project::create(request(['title', 'description']));

        return redirect('/projects'); // Laravel Helpers
    }

    public function edit(Project $project) 
    {
        // return $id;
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) 
    {
        // dd('im debugger!');
        // dd(request()->all());

        // ВАРИАНТ 1
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();
        
        // ВАРИАНТ 1
        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }
    public function destroy(Project $project) 
    {
        // dd('im debugger!');
        // dd(request()->all());
        $project->delete();
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();

        return redirect('/projects');
    }
}

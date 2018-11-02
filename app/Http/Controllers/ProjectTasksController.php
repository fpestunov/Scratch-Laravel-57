<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        // Валидация
        $attributes = request()->validate(['description' => 'required|min:3|max:255']);

        // Вариант 2
        // $project->addTask(request('description'));
        $project->addTask($attributes);

        // Вариант 1
        // Task::create([
        //     'project_id' => $project->id,
        //     'description' => request('description')
        // ]);

        return back();
        
    }
    public function update(Task $task) 
    {
        // dd($task);
        // dd(request()->all());
        // dd(request()->has('completed'));

        $task->update([
            'completed' => request()->has('completed')
        ]);

        return back();
    }
}

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

        // Объеденим валидацию и добавление
        // $project->addTask(
        //     request()->validate(['description' => 'required|min:3|max:255'])
        // );


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

        // $task->update([
        //     'completed' => request()->has('completed')
        // ]);

        // Encapsulation
        // $task->complete(request()->has('completed'));

        // true and false - the same?
        // Make more readeble

        // 1 вариант
        // if (request()->has('completed')) {
        //     $task->complete();
        // }
        // else {
        //     $task->incomplete();
        // }

        // 2 вариант
        // request()->has('completed') ? $task->complete() : $task->incomplete();

        // 3 вариант
        $method = request()->has('completed') ? 'complete' : 'incomplete';
        $task->$method();

        return back();
    }
}

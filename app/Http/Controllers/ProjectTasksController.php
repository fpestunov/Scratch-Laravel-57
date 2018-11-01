<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
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

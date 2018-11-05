<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $fillable =[
        'owner_id', 'title', 'description'
    ];

    // $project->tasks();
    public function tasks() 
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
        // Вариант 2
        // Eloquent, см метод выше в этой модели
        $this->tasks()->create($task);


        // Вариант 1
        // return Task::create([
        //     'project_id' => $this->id,
        //     'description' => $description
        // ]);
    }
}

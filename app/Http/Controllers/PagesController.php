<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome')->with([
            'foo' => 'bar',
            'tasks' => ['some tasks'],
            'feed' => request('text'),
        ]);
    }
}

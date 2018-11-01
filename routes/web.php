<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'PagesController@home');

Route::resource('projects', 'ProjectsController');
// Route::get('/projects', 'ProjectsController@index');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/create', 'ProjectsController@create');

Route::get('/old-home', function () {
    $tasks = [
        'Veni',
        'Vedi',
        'Veci'
    ];

    // 1 вариант
    return view('welcome', [
        'tasks' => $tasks,
        'foo' => 'bar',
        'feed' => request('text'), // URI/?text=asdfsadf
    ]);

    // 2 вариант
    // return view('welcome')->withTasks($tasks)->withFoo($foo);

    // 3 вариант
    return view('welcome')->with([
        'foo' => 'bar',
        'tasks' => ['some tasks'],
        'feed' => request('text'),
    ]);

});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});



<?php

use App\Task;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tasks', function () {

    //$tasks = DB::table('tasks')->get(); //query builder method
    $tasks = App\Task::all(); //eloquent method
    
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{id}', function ($id) {

    $task = DB::table('tasks')->find($id);
     
    return view('tasks.show', compact('task'));
});


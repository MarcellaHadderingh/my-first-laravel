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

Route::get('/', function () {
    return view('welcome')->with([
        'tasks' => [' some tasks']
    ]);
    
    /*

    return view('welcome')->withTasks([
        'Go to the store',
        'Go to the market',
        'Go to work',
        'Go to the concert'
    ]);

    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to work',
        'Go to the concert'
    ];

    return view('welcome', [
        'tasks' => $tasks,
    ]);
    
    */
   
    
});


Route::get('/about', function () { //example.com/contact
    return view('about');
});

Route::get('/contact', function () { //example.com/contact
    return view('contact');
});
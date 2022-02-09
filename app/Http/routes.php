<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks',function (){
    echo 'all tasks';
});
Route::get('/tasks/create',function (){
    echo 'form for new task';
});
Route::post('/tasks',function (){
    echo 'store new task';
});
Route::delete('/task/{task}', function (){
    echo 'delete task';
});


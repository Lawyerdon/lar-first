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
    $tasks = \App\Models\Task::all();
    return view('tasks.index',[
        'tasks'=>$tasks,
    ]);
})->name('tasks.index');

Route::get('/tasks/create',function (){
    return view('tasks.create');
})->name('tasks.create');

Route::post('/tasks',function (\Illuminate\Http\Request $request){
   $validator = Validator::make($request->all(),['name'=>'required|max:255',]);
   if($validator->fails()){
       return redirect(route('tasks.create'))
           ->withInput()
           ->withErrors($validator);
   }
   $task = new\App\Models\Task();
   $task->name = $request->name;
   $task->save();
//   \App\Models\Task::create(['name'=>$request->name]);

   return redirect(route('tasks.index'));

})->name('tasks.store');

Route::delete('/task/{task}', function (){
    echo 'delete task';
});


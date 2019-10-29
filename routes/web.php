<?php

/*
|--------------------------------------------------------------------------
|   Web Routes
|--------------------------------------------------------------------------
|
|   Auto Resolving, Serivce Container:
|
|   Serivce Container is big block of key value pairs. To get things out of the service container, we can use two methods, app() & resolve()
|
|   To Put something into the container, app()->bind() or resolve()->bind(). What if try get something that is not register in the container? 
|   Error will be thrown like Class example does not exist.
|   
|   Laravel is going to do No of chekcs, Do i have in the container something called example? If It does not have anthing there. Then its gonna check outside
|   of the container. Maybe its a class name? rsolve(App\Example). In this case, It is not a class name. It is just a string. We can give a class name to the
|   conatiner and it will give us the instance of the class. In case of string, this is gonna through an exception.
|
|   In case of the absence of key 'example' in the container, we did not bind anythong in the container which is not given by the callback function, It is
|   gonna find the class which is given in the singleton callback function. e.g resolve('App\Example'). It finds the class and return and instance of this
|   class. This ia called auto resolving.
|   What if 'example' has its own cunstructor?
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*
    Resource (Project) is a thing tp which we are manipulatting.

    1- GET /projects                    (index)     ->  all
    2- GET /projects/create             (create)    ->  shows a form to create project
    3- GET /projects/{project}          (show)      ->  get existing project
    4- POST /projects                   (store)     ->  store project
    5- GET /projects/{project}/edit     (edit)      ->  show form to edit project
    6- PATCH /projects/{project}        (update)    ->  update project
    7- Delete /projects/{project}       (destroy)   ->  delete project

    Route::get('/projects', 'ProjectsController@index')->name('projects.index');
    Route::get('/projects/create', 'ProjectsController@create')->name('projects.create');
    Route::get('/projects/{project}', 'ProjectsController@show')->name('show');
    Route::post('/projects', 'ProjectsController@store');
    Route::get('/projects/{project}/edit', 'ProjectsController@edit')->name('projects.edit');
    Route::patch('/projects/{project}', 'ProjectsController@update')->name('update');
    Route::delete('/projects/{project}', 'ProjectsController@destroy')->name('delete');
*/

// Route::resource('projects', 'ProjectsController')->middleware('can:update,project');
Route::resource('projects', 'ProjectsController');
Route::resource('tasks', 'TasksController');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store')->name('completed-tasks');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');
Route::get('service-container', 'ServiceContainerController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

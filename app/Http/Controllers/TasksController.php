<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'description' => "required|min:3"
        ]);

        Task::create([
            "description" => $request->get('description'),
            "project_id" => $request->get('project_id'),
        ]);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {

        /**
         *
         *  At this point, the controller has no awairness of the underline database.
         *  It just know i have to complete a task. But in this case, alternatively
         *  we are also incompleting a task by calling the same complete() function.
         *
         *  It is wrong.We can do the same like this $task->complete(false) by passing
         *  a boolen false to the functin. But we don't know what is meant by false.
         *  We can do this by creating a second method.
         *
         *  TIP: More behaviour in model improes the quality of the project
         *
         */

        // :::::::::::::::::::::::::::::::::::::::: Method 1 :::::::::::::::::::::::::::::::::::::::: //
        // $task->update([
        //     'completed' => request()->has('completed'),
        // ]);

        // :::::::::::::::::::::::::::::::::::::::: Method 2 :::::::::::::::::::::::::::::::::::::::: //

        // if (request()->has('completed')) {
        //     $task->complete(request()->has('completed'));
        // } else {
        //     $task->incomplete();
        // }
        // :::::::::::::::::::::::::::::::::::::::: Method 3 :::::::::::::::::::::::::::::::::::::::: //

        // $method = $request->has('completed') ? 'complete' : 'incomplete';

        // $task->$method;

        // :::::::::::::::::::::::::::::::::::::::: Method 4 :::::::::::::::::::::::::::::::::::::::: //

        $request->has('completed') ? $task->complete() : $task->incomplete();

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}

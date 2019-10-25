<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class CompletedTasksController extends Controller
{

    /**
     *  In this case, we are not digging into the request, we are
     *  not calculating a method & then we are not calling it
     *  dynamically. Also we are not handling if conditions heer
     *  that increases the space time complaxity. But, is it
     *  improvement in this given context? well, it depends.
     *
     *  We can do whatever we want to do with completed tasks.
     */

    public function store(Task $task) {

        $task->complete();
        return back();
    }

    public function destroy(Task $task) {
        $task->incomplete();
        return back();
    }

}

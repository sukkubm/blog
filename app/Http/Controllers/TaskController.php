<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{
    //
    
    public function index()
    {
        //    $name = "Sukrutha";
//    $tasks = ["hi", "this is an array","see you later!"];
    
    
//    $tasks = DB::table('task')->get();
//    return $tasks;
    $tasks = Task::all();
    
    return view('tasks.index', compact('tasks'));
    }
    
    public function show(Task $taskid)
    {
        //    dd($id);
    
//    $task = DB::table('task')->find($id);
//    $task = Task::find($id);
    
    return view('tasks.show', compact('taskid'));
    }
    
}

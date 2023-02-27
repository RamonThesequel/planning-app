<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

class TaskController extends Controller
{
    public function index() 
    {

        $tasks = DB::table('task')->get();

        foreach ($tasks as $task) {
            $user_task = Task::find($task->id)->users->pluck('name');
            $task->user_tasks = $user_task;   
        }

        return view('task.index', ['tasks' => $tasks]);
    }

    public function createTask(Request $request) 
    {
        $users = DB::table('users')->pluck('id', 'name');

        return view('task.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function SaveTask(Request $request) 
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'priority' => 'required',
            'description' => 'required',
        ]);

        // Store data in database
        $task = Task::create($request->only('title', 'status', 'priority', 'description'));

        $user_ids = $request->user_id;

        // Store data in many to many table
        $task->users()->attach($user_ids);

        return redirect('/task')->with('success', 'Task created successfully.');
    }
}


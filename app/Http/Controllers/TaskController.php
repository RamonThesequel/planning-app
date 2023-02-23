<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\task;

class TaskController extends Controller
{
    public function index() {
        return view('task.index');
    }

    public function createTask(Request $request) {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function SaveTask(Request $request) {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'priority' => 'required',
            'description' => 'required'
        ]);

        // Store data in database
        task::create($request->all());

        return redirect('/task');

        // return back()->with('success', 'Task succesfully created');
    }
}

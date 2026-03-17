<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());

        $task = new Task;

        $request->validate([
            'task'=>'required|min:5|max:100',
        ]);

        $task->task = $request->task;
        $task->save();

        $data=Task::all();
        //dd($data);
        //return redirect()->back();
        return view('tasks')->with('tasks',$data);

    }
}
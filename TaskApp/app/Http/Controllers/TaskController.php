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
    public function UpdateTaskAsCompleted($id){
        $task=Task::find($id);
        $task->iscompleted=1;
        $task->save();
        return redirect()->back();
    }

    public function UpdateTaskAsNotCompleted($id){
        $task=Task::find($id);
        $task->iscompleted=0;
        $task->save();
        return redirect()->back();
    }

    public function deletetask($id){
        $task=Task::find($id);
        $task->delete();
        return redirect()->back();
    }

    public function updatetaskview($id){
        $task=Task::find($id);
            return view('updatetask')->with('taskdata',$task);

    }

    public function updatetask(Request $request){
        $id=$request->id;
        $task=$request->task;
        $data=Task::find($id);
        $data->task=$task;
        $data->save();
        $datas=Task::all();
        return view('/tasks')->with('tasks',$datas);

    }


}
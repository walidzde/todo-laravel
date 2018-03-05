<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Task ;
use Session;


class TaskController extends Controller
{

    public function index(){
       /* $tasks=Task::all();
        return view('task')->with('tasks',$tasks);
       */
       $tasks=Task::paginate(6);
       return view('task')->with('tasks',$tasks);

    }

    public function store(Request $request){
       //dd($request->all());
        $task=new Task();
        $task->task=$request->task;
        $task->save();
        Session::flash('success','new task successfully created ');

        return redirect()->back();
    }

    public function delete($id){
        $task=Task::find($id);
        $task->delete();

        return redirect()->back();
    }

    public function update($id){
        $task=Task::find($id);
        return view('update')->with('task',$task);
    }

    public function save(Request $request,$id){
        $task=Task::find($id);
        $task->task=$request->task;
        $task->save();

        return redierect('/tasks');
    }

    public function completed($id){
        $task=Task::find($id);
        $task->completed=1;
        $task->save();

        //return redirect()->route('tasks');
        return redirect('/tasks');
    }
}

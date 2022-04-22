<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Task::orderBy('id','desc')->paginate(5);
        return view('task.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|min:4|max:255',
            'description'=>'required|min:4|max:255',
            'completed'=>'required',
            'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $input=$request->all();
        $profileImage = date('YmdHis') . "." . $request->file('img_path')->getClientOriginalExtension();
        $request->img_path->move(public_path('img'), $profileImage);
        $input['img_path'] = "$profileImage";
        Task::create($input);
        return redirect()->back()->with('success','Task created successfully'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        $data=Task::find($task->id);
        return view('task.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $task=Task::find($task->id);
        return view('task.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'name'=>'required|min:4|max:255',
            'description'=>'required|min:4|max:255',
            'completed'=>'nullable|integer'
        ]);
        $task=Task::find($task->id);
        $task->update($request->all());
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
        Task::destroy($task->id);
        return redirect()->back();
    }
}

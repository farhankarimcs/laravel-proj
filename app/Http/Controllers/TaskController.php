<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=auth()->user();
        if($user){
            $data=User::find($user=auth()->user()->id)->tasks;
            return view('task.index',compact('data'));
        }
        else{
            $data=Task::all();
            dd($data);

        }

        //find username with task
        // dd(Task::find(5)->user->email);
        
    }

    public function mytasks()
    {
        $user=auth()->user();
        if($user){
            $data=User::find($user=auth()->user()->id)->tasks;
            return view("task.mytasks",compact('data'));
        }
        else{
            $data=Task::paginate(5);
            return view("task.index",compact('data'));

        }
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
        
        $input=$request->all();
        
        if($img=$request->file('img_path')){
            // var_dump($input);
            $profileImage = date('YmdHis') . "." . $request->file('img_path')->getClientOriginalExtension();
            $request->img_path->move(public_path('img'), $profileImage);
            $input['img_path'] = "$profileImage";
        }
        else{
            unset($input["img_path"]);
        }

        $task=Task::find($task->id);
        $task->update($input);
        return redirect()->route('task.index')->with('success','Task updated successfully');
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
        if($task->img_path){
            unlink(public_path()."/img/20220425050329.jpg");
        }
        return redirect()->back();
    }

    public function insertTag()
    {
        // $task=new Task;
        // $task->name="Buy milk carton";
        // $task->description="asdads asas dsa";
        // $task->completed=1;
        // $task->save();

        $mytask=Task::find(811);
        $mytask->tags()->attach([77,67,97]);
        

        return 'Success';
    }
}

<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::orderBy('is_done', 'asc')->get();
        $tasks_done = Task::where('is_done', 1)->get();
        return view('home', ['tasks' => $tasks, 'nb_tasks_non_done' => count($tasks) - count($tasks_done)]);
    }

    public function add(Request $request)
    {
        $user = Auth::user();
        $task = new Task;
        $task->name = $request->name;
        $task->description = $request->description;
        $task->due_date = $request->due_date;
        $task->user_id = $user->id;
        $task->save();

        return redirect()->route('tasks');

    }

    public function edit()
    {
        return view('edit');
    }

    public function ajax_done_task(Request $request)
    {
        $task = Task::find($request->task_id);
        $task->is_done = $request->is_done;
        $task->save();
        return response()->json();
    }
}

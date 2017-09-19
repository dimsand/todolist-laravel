<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTasks;
use App\Task;
use Illuminate\Contracts\Validation\Validator;
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
        $tasks = Task::all();
        return view('home', ['tasks' => $tasks]);
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
}

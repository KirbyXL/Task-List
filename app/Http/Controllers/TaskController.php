<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = auth()->user();
        
        // fetches all the data
        $tasks = $user->tasks;

        // compact 
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // so validate() ensures that proper input is added to out form when someone is submitting data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        //gets the authenticated user
        // so $user is a variable that will just store the current authenticated users object
        // user() is  a method of auth() which is the helper function and takes the CURRENT authicated user object
        // auth() just returns the authenticated guard instance
        $user = auth()->user();

        // create() inserts the reocrd into the tasks table. it expects an array
        // i removed $task =     here cuz didnt seem needed
        $user->tasks()->create($validated);

        return redirect()->route('tasks.index')->with('success_message', 'Your Task was created successfully!');

    }

    public function complete(Task $task) {

        if ($task->user_id == auth()->id()) {
            $task->is_completed = true;
            $task->save();
            return redirect()->back()->with('success', 'Task marked as complete');
        } else {

            return redirect()->back()->with('error', 'You are not authorized to touch this task');
        }
        
        
    }

    public function undo(Task $task) {

        if ($task->user_id == auth()->id()) {
            $task->is_completed = false;
            $task->save();
            return redirect()->back()->with('success', 'Task marked as uncompleted');
        } else {

            return redirect()->back()->with('error', 'You are not authorized to touch this task');
        }
        
        
    }


    /**
     * Remove the specified resource from storage.
     */

        public function destroy(Task $task) {

        if ($task->user_id == auth()->id()) {
            $task->delete();
            return redirect()->back()->with('success', 'Task removed');
        } else {

            return redirect()->back()->with('error', 'You are not authorized to delete this task');
        }
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }


}

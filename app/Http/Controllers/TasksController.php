<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Validator;
use Session;
use Redirect;
use Illuminate\Support\Facades\Input;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$tasks = Task::all();
		return view('tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		// validate
        // read more on validation at http://laravel.com/docs/validation
		
		
        $rules = array(
            'task_name'      => 'required',
            'task_desc'      => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('tasks/create')
                ->withErrors($validator)->withInput();
        } else {
            // store
            $task = new Task;
            $task->name       		= Input::get("task_name");
            $task->description      = Input::get("task_desc");
			$task->dateCreated 		= date('Y-m-d h:i:s');
			$task->dateUpdated 		= date('Y-m-d h:i:s');;
			$task->save();

            // redirect
            Session::flash('message', 'Successfully created the task');
            return Redirect::to('tasks');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		// get the nerd
        $task = Task::find($id);
        // show the edit form and pass the nerd
        return view('tasks.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
		$rules = array(
            'task_name'      => 'required',
            'task_desc'      => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('tasks/create')
                ->withErrors($validator)->withInput();
        } else {
            // store
            $task = Task::find($id);
            $task->name       		= Input::get("task_name");
            $task->description      = Input::get("task_desc");
			$task->dateUpdated 		= date('Y-m-d h:i:s');;
			$task->save();

            // redirect
            Session::flash('message', 'Successfully edited the task');
            return Redirect::to('tasks');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
		// delete
        $task = Task::find($id);
        $task->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the task');
        return Redirect::to('tasks');
    }
}

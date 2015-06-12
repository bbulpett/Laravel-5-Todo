<?php namespace App\Http\Controllers;

use App\Project;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TasksController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('tasks.index', compact('project'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('tasks.create', compact('project'));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  Tasks $task
	 * @return Response
	 */
	public function show(Tasks $task)
	{
		//
		return view('tasks.show', compact('project', 'task'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  Tasks $task
	 * @return Response
	 */
	public function edit(Tasks $task)
	{
		//
		return view('tasks.edit', compact('project', 'task'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  Tasks $task
	 * @return Response
	 */
	public function update(Tasks $task)
	{
		//
		return view('tasks.update', compact('project', 'task'));

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  Tasks $task
	 * @return Response
	 */
	public function destroy(Tasks $task)
	{
		//
	}

}

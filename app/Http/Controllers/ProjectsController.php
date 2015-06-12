<?php namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProjectsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::all();
		// Point to the appropriate view
		return view('projects.index', compact('project'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('projects.create');

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
	 * @param  int  Project $project
	 * @return Response
	 */
	public function show(Project $project)
	{
		//
		return view('projects.show', compact('project'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  Project $project
	 * @return Response
	 */
	public function edit(Project $project)
	{
		//
		return view('projects.edit', compact('project'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  Project $project
	 * @return Response
	 */
	public function update(Project $project)
	{
		//
		return view('projects.update', compact('project'));

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  Project $project
	 * @return Response
	 */
	public function destroy(Project $project)
	{
		//
	}

}

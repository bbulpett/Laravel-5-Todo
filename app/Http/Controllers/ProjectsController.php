<?php namespace App\Http\Controllers;
use Input;
use Redirect;

use App\Project;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProjectsController extends Controller {
	// Validation rules for Project creation and editing
	protected $rules = [
		'name' => ['required', 'min: 3'],
		'slug' => ['required'],
	];
	// Additional validation rules can be found at http://laravel.com/docs/5.0/validation#available-validation-rules
		
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::all();
		// Point to the appropriate view
		return view('projects.index', compact('projects'));
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
	public function store(Request $request)
	{
		// Validation
		$this->validate($request, $this->rules);

		$input = Input::all();
		Project::create( $input );

		return Redirect::route('projects.index')->with('message', 'Project created');

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
	public function update(Project $project, Request $request)
	{
		// Validate
		$this->validate($request, $this->rules);

		$input = array_except(Input::all(), '_method');
		$project->update($input);

		return Redirect::route('projects.show', $project->slug)->with('message', 'Project updated');
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
		$project->delete();

		return Redirect::route('projects.index')->with('message', 'Project deleted');
	}

}

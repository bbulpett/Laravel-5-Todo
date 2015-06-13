<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	// Define relationship to tasks
	public function tasks() {
		return $this->hasMany('App\Task');
	}
}

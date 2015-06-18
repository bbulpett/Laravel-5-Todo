<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

	// Define relationship to Projects
	public function project() {
		return $this->belongsTo('App\Project');
	}

	protected $guarded = [];
	
}

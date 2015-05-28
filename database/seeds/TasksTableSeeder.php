<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder {

	public function run ()
	{
		DB::table('tasks')->delete(); // Clean table before seeding

		$tasks = array(
            ['id' => 1, 'name' => 'Task 1', 'slug' => 'task-1', 'project_id' => 1, 'completed' => false, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Task 2', 'slug' => 'task-2', 'project_id' => 1, 'completed' => false, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Task 1', 'slug' => 'task-3', 'project_id' => 1, 'completed' => false, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Task 1', 'slug' => 'task-4', 'project_id' => 1, 'completed' => false, 'description' => 'My second task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Task 1', 'slug' => 'task-5', 'project_id' => 1, 'completed' => false, 'description' => 'My third task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Task 1', 'slug' => 'task-6', 'project_id' => 2, 'completed' => false, 'description' => 'My fourth task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'Task 1', 'slug' => 'task-7', 'project_id' => 2, 'completed' => false, 'description' => 'My fifth task', 'created_at' => new DateTime, 'updated_at' => new DateTime]
		);

		DB::table('tasks')->insert($tasks); // Run the seeder
	}
}
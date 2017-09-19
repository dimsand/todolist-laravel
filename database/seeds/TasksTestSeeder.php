<?php

use Illuminate\Database\Seeder;

class TasksTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTestSeeder::class);

        DB::table('tasks')->insert([
            'name' => "Tâche 1",
            'description' => "Ceci est la tâche 1",
            'due_date' => date('Y-m-d H:i:s'),
            'category_id' => 1,
            'user_id' => 1,
        ]);
        DB::table('tasks')->insert([
            'name' => "Tâche 2",
            'description' => "Ceci est la tâche 2",
            'due_date' => date('Y-m-d H:i:s'),
            'category_id' => 2,
            'user_id' => 2,
        ]);
        DB::table('tasks')->insert([
            'name' => "Tâche 3",
            'description' => "Ceci est la tâche 3",
            'due_date' => date('Y-m-d H:i:s'),
            'category_id' => 3,
            'user_id' => 2,
        ]);
    }
}

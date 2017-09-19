<?php

use Illuminate\Database\Seeder;

class UsersTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Test",
            'email' => "test@test.com",
            'password' => bcrypt("testtest"),
        ]);
    }
}

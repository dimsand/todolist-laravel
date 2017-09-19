<?php

use Illuminate\Database\Seeder;

class CategoriesTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<4;$i++){
            DB::table('categories')->insert([
                'libelle' => "Categorie ".$i,
            ]);
        }
    }
}

<?php

use Carbon\Carbon;
use App\Categories;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $now = Carbon::now()->toDateTimeString();

        Categories::insert([
            ['name' => 'Légumes', 'slug' => 'legumes', 'image' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Viandes', 'slug' => 'viandes', 'image' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Poissons', 'slug' => 'poisson', 'image' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fromages', 'slug' => 'fromage', 'image' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Autres', 'slug' => 'autres', 'image' => '', 'created_at' => $now, 'updated_at' => $now],
            
        ]);
    }
}

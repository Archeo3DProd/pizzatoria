<?php

use App\Pizzas;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $now = Carbon::now()->toDateTimeString();

        Pizzas::insert([
            ['nom' => 'Margarita', 'slug' => 'margarita', 'ingredients' => '[1, 23, 33]', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}

<?php

use Carbon\Carbon;
use App\Ingredients;
use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Ingredients::insert([
            ['name' => 'Tomate', 'slug' => 'tomate', 'category' => 'legumes', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Aubergine', 'slug' => 'augergine', 'category' => 'legumes', 'price' => 0.3, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Poivrons', 'slug' => 'poivrons', 'category' => 'legumes', 'price' => 0.25, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Epinards', 'slug' => 'epinards', 'category' => 'legumes', 'price' => 0.15, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Artichaut', 'slug' => 'artichaut', 'category' => 'legumes', 'price' => 0.25, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ruccola', 'slug' => 'ruccola', 'category' => 'legumes', 'price' => 0.25, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Olives noires', 'slug' => 'olives-noires', 'category' => 'legumes', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Olives vertes', 'slug' => 'olives-vertes', 'category' => 'legumes', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bolets', 'slug' => 'bolets', 'category' => 'legumes', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Oignon', 'slug' => 'oignon', 'category' => 'legumes', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tomates cerises', 'slug' => 'tomates-cerises', 'category' => 'legumes', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Champignons de Paris', 'slug' => 'champignons-de-paris', 'category' => 'legumes', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Anchois', 'slug' => 'anchois', 'category' => 'poissons', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Saumon', 'slug' => 'saumon', 'category' => 'poissons', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Thon', 'slug' => 'thon', 'category' => 'poissons', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Roast beef', 'slug' => 'roast-beef', 'category' => 'viande', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tartare', 'slug' => 'tartare', 'category' => 'viande', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Lard fumé', 'slug' => 'lard-fume', 'category' => 'viande', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jambon cru', 'slug' => 'jambon-cru', 'category' => 'viande', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jambon cuit', 'slug' => 'jambon-cuit', 'category' => 'viande', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Poulet au curry', 'slug' => 'poulet-curry', 'category' => 'viande', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chair à saucisses', 'slug' => 'chair-a-saucisses', 'category' => 'viande', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mozzarella', 'slug' => 'mozzarella', 'category' => 'fromage', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Grana Padano', 'slug' => 'grana-padano', 'category' => 'fromage', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Camembert', 'slug' => 'camembert', 'category' => 'fromage', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gorgonzolla', 'slug' => 'gorgonzolla', 'category' => 'fromage', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chèvre', 'slug' => 'chevre', 'category' => 'fromage', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ricotta', 'slug' => 'ricotta', 'category' => 'fromage', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Câpres', 'slug' => 'capres', 'category' => 'autres', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Basilic frais', 'slug' => 'basilic-frais', 'category' => 'autres', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ail', 'slug' => 'ail', 'category' => 'autres', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ananas', 'slug' => 'ananas', 'category' => 'autres', 'price' => 0.2, 'image' => 'tomate.jpg', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}

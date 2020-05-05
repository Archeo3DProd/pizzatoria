<?php

namespace App\Http\Controllers;

use App\Pizzas;
use App\Ingredients;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
    // Affichage des pizzas //  
        $ingredients_pizzas = [];
        $ingredients_prix = [];

        $ingredients = [];

        $pizzas = Pizzas::all();

        foreach ($pizzas as $pizza) {
            
            // Prix de base
            $prix = 10;

            // Liste des ingrédients pour affichage
            $ingredients_pizzas = $pizza->ingredients;

            // Split des ingrédients pour recherche dans la bdd des ingrédients
            $ingredients = preg_split("/(, )/", $pizza->ingredients);

            // Récupérer le prix de chaque ingrédients et calculer le prix final
            foreach ($ingredients as $ingredient) {
                $ingredients_prix = Ingredients::where('name', $ingredient)->firstOrFail();
                $prix += $ingredients_prix->price;
            }
            // Formater le prix
            $pizza->prix = (number_format($prix, 2, ',', ' '));
        }
    // Fin de l'affichage des pizzas //  

        return view('home', [
            'pizzas' => $pizzas,
            'ingredients_pizzas' => $ingredients_pizzas
        ]);
    }
}

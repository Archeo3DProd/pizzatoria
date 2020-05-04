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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

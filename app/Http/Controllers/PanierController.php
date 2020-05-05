<?php

namespace App\Http\Controllers;

use App\Panier;
use App\Commandes;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $total = 0;

        $cookie_token = $request->cookie('laravel_session');

        $commandes = Commandes::where('token', $cookie_token)->get();
        
        return view('panier', [
            'request' => $request,
            'commandes' => $commandes,
            'total' => $total
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commande = Commandes::create($request->all());

        return redirect('panier');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function effacer($id)
    {
        $recherche = Commandes::where('id', $id);
        Commandes::where('id', $id)->delete();
        
        return back();
    }
}

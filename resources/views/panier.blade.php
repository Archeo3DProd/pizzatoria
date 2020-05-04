@extends('layouts.master')

@section('content')
   
    <div class="pizzas-container">
        @if($commandes !== null)
            <h3 class="titre-page mt-3">Panier</h3>
            @foreach ($commandes as $commande)
                <div class="card mt-3 mb-3 ml-auto mr-auto" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            @if ($commande->pizza_image_url)
                                <img src="img/{{ $commande->pizza_image_url }}" class="card-img" alt="pizza">
                            @else
                                <img src="{{ asset('img/pizza_1.jpg') }}" class="card-img" alt="pizza">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ ($commande->pizza_nom) }}</h5>
                                <p class="card-text">{{ $commande->pizza_ingredients }}</p>
                                <p class="card-text">CHF {{ $commande->pizza_prix }}</p>
                            </div>
                        </div>
                        <form action="{{ route('panier.destroy', $commande->id) }}" method="delete" class="form-group">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Supprimer&nbsp;&nbsp;<i class="fas fa-times-circle"></i></button>
                            <!--
                            <input type="hidden" id="commande_id" name="commande_id" class="hidden" value="{{ $commande->id }}">
                            <input type="hidden" id="pizza_nom" name="pizza_nom" class="hidden" value="{{ $commande->pizza_nom }}">
                            <input type="hidden" id="pizza_ingredients" name="pizza_ingredients" class="hidden" value="{{ $commande->pizza_ingredients }}">
                            <input type="hidden" id="pizza_prix" name="pizza_prix" class="hidden" value="{{ $commande->pizza_prix }}">
-->
                        </form>
                    </div>
                </div>
            @endforeach
        @else
            <h3 class="titre-page mt-3">Votre panier est vide</h3>
        @endif
        <form action="{{ route('home') }}" method="GET" class="form-group">
            {{ csrf_field() }}
            <button class="btn btn-success" type="submit">Continuer le shopping</button>
        </form>
    </div>

        @if ($request->pizza_nom)
        <form action="{{ route('panier.delete') }}" method="DELETE" class="form-group">
            {{ csrf_field() }}
            <button class="btn btn-success" type="submit">Continuer le shopping</button>
            <input type="hidden" id="commandes_nom" name="commandes_nom" value="{{ $request->pizza_nom }}" class="hidden"></input>
            <input type="hidden" id="commandes_ingredients" name="commandes_ingredients" value="{{ $request->pizza_ingredients }}" class="hidden"></input>
            <input type="hidden" id="commandes_prix" name="commandes_prix" value="{{ $request->pizza_prix }}" class="hidden"></input>
            <button class="btn btn-warning" type="submit">Confirmer la commande</button>
        </form>
        @endif
    </div>
@stop
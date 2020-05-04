@extends('layouts.master')

@section('content')

    <div class="pizzas-container">
        <h3 class="titre-page mt-3">Nos Pizzas</h3>
        @foreach ($pizzas as $pizza)
        <div class="card mt-3 mb-3 ml-auto mr-auto" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="img/{{ $pizza->image_url }}" class="card-img" alt="pizza">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pizza->nom }}</h5>
                        <p class="card-text">{{ $pizza->ingredients }}.</p>
                        <p class="card-text">CHF {{ $pizza->prix }}</p>
                    </div>
                </div>
                <form action="{{ route('panier') }}" method="POST" class="form-group">
                    {{ csrf_field() }}
                    <button class="btn btn-success">Commander&nbsp;&nbsp;<i class="fas fa-shopping-cart"></i></button>                        
                        <input type="hidden" id="pizza_image_url" name="pizza_image_url" class="hidden" value="{{ $pizza->image_url }}">
                        <input type="hidden" id="pizza_nom" name="pizza_nom" class="hidden" value="{{ $pizza->nom }}">
                        <input type="hidden" id="pizza_image_url" name="pizza_image_url" class="hidden" value="{{ $pizza->image_url }}">
                        <input type="hidden" id="pizza_ingredients" name="pizza_ingredients" class="hidden" value="{{ $pizza->ingredients }}">
                        <input type="hidden" id="pizza_prix" name="pizza_prix" class="hidden" value="{{ $pizza->prix }}">
                        <input type="hidden" id="token" name="token" class="hidden" value="{{ Session::getId() }}">
                        <input type="hidden" id="commande_id" name="commande_id" class="hidden" value="{{ $pizza->id }}">
                </form>
            </div>
        </div>
        @endforeach
    </div>

@stop
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
                    <form action="post" class="form-group">
                        <button class="btn btn-success">Commander
                            <i class="fas fa-cart"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>      
        @endforeach
    </div>

@stop
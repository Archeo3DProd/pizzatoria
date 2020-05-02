@extends('layouts.master')

@section('content')

    <div class="pizzas-container">
        <h3 class="titre-page mt-3">Nos Pizzas</h3>
        @foreach($pizzas as $pizza)
            {{ dump($pizza->ingredients) }}
        @endforeach
        <div class="card mt-3 mb-3 ml-auto mr-auto" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="img/pizza_1.jpg" class="card-img" alt="pizza">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>       
        <div class="card mt-3 mb-3 ml-auto mr-auto" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="img/pizza_2.jpg" class="card-img" alt="pizza">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
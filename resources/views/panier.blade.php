@extends('layouts.master')

@section('content')
   
    <h3 class="titre-page mt-3">Panier</h3>
    <main class="panier-wrapper">
        <div class="pizzas-container">
            @if($commandes !== null)
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
                            <form action="{{ route('panier.effacer', $commande->id) }}" method="get" class="form-group">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger">Supprimer&nbsp;&nbsp;<i class="fas fa-times-circle"></i></button>
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

        <div class="pizzas-container">
            <div class="ingredients-category-container-commande mb-3">
                <h4 class="card-title commande-titre mt-3">Votre commande</h4>
                
            @if($commandes !== null)
                @foreach ($commandes as $commande)
                    <div class="card mt-3 mb-3 ml-auto mr-auto" style="max-width: 540px;">
                        <div class="row no-gutters">
                                <div class="card-body card-body-wrapper">
                                    <div class="card-body-row">
                                        <h5 class="card-title">{{ ($commande->pizza_nom) }}</h5>
                                    </div>
                                    <div class="card-body-row">
                                        <p class="card-text pizza_prix">CHF {{ $commande->pizza_prix }}</p>                                        
                                    </div>
                                </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h3 class="titre-page mt-3">Votre panier est vide</h3>
            @endif
                
                <div class="total-wrapper livraison mt-2 livraison-fond-rouge">
                    <span class="nom-selected"><input type="checkbox" id="livraison" name="livraison" class="mr-2" onclick="livraison()"><label for="livraison">Livraison <em>(sans livraison)</em></label></span><em class="prix-selected">CHF 5.00</em>
                </div>
                <div class="total-wrapper total-a-payer mt-2">
                    Total : <em class="total">CHF 00.00</em>
                </div>
            </div>
            <div class="commande-wrapper mb-5">
                <div class="passer-commande">
                    <form action="{{ route('home') }}" method="GET" class="form-group">
                        {{ csrf_field() }}
                        <button class="btn btn-light" type="submit">Passer la commande</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        let status = 0;
        function livraison() {
            const livraison = document.getElementsByClassName('livraison')[0];
            total = document.getElementsByClassName("total")[0];
            total.innerText = total.innerText.replace("CHF ", "");
            const prix = parseFloat(total.innerText);
            const prixSelected = document.getElementsByClassName('prix-selected')[0];
            const label = document.querySelector('label');

            // Si "livraison" est décochée : fond rouge et écriture blanche
            // Si "livraison" est cochée : fond vert et écriture noire
            if (status == 0) {
                total.innerText = "CHF " + ((parseFloat(prix)+ parseFloat(5)).toFixed(2));
                if (livraison.classList.contains('livraison-fond-rouge')) {
                    livraison.classList.remove('livraison-fond-rouge');                    
                    livraison.classList.add('livraison-fond-vert');
                    prixSelected.innerText = 'CHF 5.00';
                    label.innerText = 'Livraison incluse';
                }
                status = 1;
            } else {
                total.innerText = "CHF " + ((parseFloat(prix)- parseFloat(5)).toFixed(2));
                if (livraison.classList.contains('livraison-fond-vert')) {
                    livraison.classList.remove('livraison-fond-vert');                    
                    livraison.classList.add('livraison-fond-rouge');
                    prixSelected.innerText = 'CHF 0.00';
                    label.innerHTML = 'Livraison <em>(sans livraison)</em>';
                }
                status = 0;
            }
        }

        function calculerTotal() {
            const listePrix = document.getElementsByClassName('pizza_prix');
            const total = document.getElementsByClassName('total')[0];

            let prixTotal = 0;
            let prixTemp;
            for (let i = 0; i < listePrix.length; i++) {
                prixTemp = (listePrix[i].innerText.replace(/CHF\s+/, ''));
                prixTemp = (prixTemp.replace(/,/, '.'));
                prixTemp = parseFloat(prixTemp).toFixed(2);
                prixTemp = parseFloat(prixTemp)
                prixTotal = parseFloat(prixTotal)
                prixTotal = prixTotal + prixTemp;
                prixTotal = prixTotal.toFixed(2)
            }
            
            total.innerText = "CHF " + prixTotal;
                
        }
        calculerTotal();
    </script>
@stop
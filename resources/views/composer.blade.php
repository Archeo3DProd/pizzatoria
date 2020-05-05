@extends('layouts.master')

@section('content')

    <div class="pizzas-container">
        <h3 class="titre-page mt-3">Composez votre Pizza</h3>
        <div class="composer-wrapper">
            <div class="ingredients-category-container ml-auto mr-auto">
                <h4>Catégories</h4>
                <ul class="list-group">
                    @foreach ($categories as $category)
                        <div class="category-button">
                            <li class="list-group-item">{{ $category->name }}</li>
                            @foreach ($ingredients as $ingredient)
                                @if ($ingredient->category == $category->slug)
                                    <ul class="list-sous-group">
                                        <li class="list-group-item" onclick="addIngredient('{{ $ingredient->name }}', '{{ $ingredient->price }}')">{{ $ingredient->name }} - CHF {{ number_format($ingredient->price, 2, ',', ' ') }}</li>
                                    </ul>
                                @endif
                            @endforeach
                        </div>
                    @endforeach
                </ul>
            </div>
            <div class="ingredients-category-container ml-auto mr-auto">
                <h4>Votre Pizza</h4>
                <div class="total-wrapper mt-2">
                    <span class="nom-selected">Prix de base</span><em class="prix-selected">CHF 10.00</em>
                </div>
                <ul class="list-group-selected">
                </ul>
                <div class="total-wrapper total-a-payer mt-2">
                    Total : <em class="total">CHF 10.00</em>
                </div>
                <div class="panier-ajouter">
                    <form action="{{ route('panier') }}" method="POST">
                    {{ csrf_field() }}
                        <button class="btn btn-success mt-3">Ajouter au panier&nbsp;&nbsp;<i class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" id="pizza_nom" name="pizza_nom" class="hidden" value="Pizza personnelle">
                        <input type="hidden" id="pizza_ingredients" name="pizza_ingredients" class="hidden" value="">
                        <input type="hidden" id="pizza_prix" name="pizza_prix" class="hidden" value="">
                        <input type="hidden" id="token" name="token" class="hidden" value="{{ Session::getId() }}">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        let prix_pizza = 10;
        function addIngredient(nom, prix) {

            const formulaire = document.querySelector('form');

            const liste = document.getElementsByClassName('list-group-selected')[0];

            let li = document.createElement("li");
            li.classList.add("item-selected");
            li.classList.add("mt-2");

            let span = document.createElement("span");
            span.classList.add('nom-selected');
            span.innerText = nom;

            let em = document.createElement('em');
            em.classList.add('prix-selected');
            em.innerText = 'CHF ' + parseFloat(prix).toFixed(2);

            // Croix pour supprimer un ingrédient
            let supprimerIngredient = document.createElement('span');
            supprimerIngredient.innerText = 'X';
            supprimerIngredient.classList.add("supprimer");
            supprimerIngredient.onclick = function() {supprimerI(em)};

            const prixContainer = document.createElement('div');

            // Hiérarchie
            li.appendChild(span);
            prixContainer.appendChild(em);
            prixContainer.appendChild(supprimerIngredient);
            li.appendChild(prixContainer);
            liste.appendChild(li);

            total = document.getElementsByClassName("total")[0];
            total.innerText = total.innerText.replace("CHF ", "");
            total.innerText = "CHF " + ((parseFloat(prix)+ parseFloat(total.innerText)).toFixed(2));

            // Créer les champs cachés
            const pizza_ingredients = document.getElementById("pizza_ingredients");
            pizza_ingredients.value += nom + ", ";

            const pizza_prix = document.getElementById("pizza_prix");
            prix_pizza += parseFloat(prix);
            
            pizza_prix.value = (parseFloat(prix_pizza)).toFixed(2);

        }

        function supprimerI(prix) {
            
            prixADeduire = parseFloat(prix.innerText.replace("CHF ", ""));

            total = document.getElementsByClassName("total")[0];
            total.innerText = total.innerText.replace("CHF ", "");
            total.innerText = "CHF " + ((parseFloat(total.innerText) - prixADeduire).toFixed(2));

            prix.closest('li').remove();
        }
    </script>
@stop
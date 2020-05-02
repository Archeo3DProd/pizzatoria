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
                <div class="total-wrapper livraison mt-2">
                    <span class="nom-selected"><input type="checkbox" id="livraison" name="livraison" class="mr-2" onclick="livraison()"><label for="livraison">Livraison</label></span><em class="prix-selected">CHF 5.00</em>
                </div>
                <div class="total-wrapper total-a-payer mt-2">
                    Total : <em class="total">CHF 10.00</em>
                </div>
                <div class="panier-ajouter">
                    <form action="post">
                        <button class="btn primary-btn">Ajouter au panier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function addIngredient(nom, prix) {
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

            let supprimerIngredient = document.createElement('span');
            supprimerIngredient.innerText = 'X';
            supprimerIngredient.classList.add("supprimer");
            supprimerIngredient.onclick = function() {supprimerI(em)};

            const prixContainer = document.createElement('div');

            li.appendChild(span);
            prixContainer.appendChild(em);
            prixContainer.appendChild(supprimerIngredient);
            li.appendChild(prixContainer);
            liste.appendChild(li);

            total = document.getElementsByClassName("total")[0];
            total.innerText = total.innerText.replace("CHF ", "");
            total.innerText = "CHF " + ((parseFloat(prix)+ parseFloat(total.innerText)).toFixed(2));

        }

        function supprimerI(prix) {
            
            prixADeduire = parseFloat(prix.innerText.replace("CHF ", ""));

            total = document.getElementsByClassName("total")[0];
            total.innerText = total.innerText.replace("CHF ", "");
            total.innerText = "CHF " + ((parseFloat(total.innerText) - prixADeduire).toFixed(2));

            prix.closest('li').remove();
        }

        let status = 0;
        function livraison() {
            total = document.getElementsByClassName("total")[0];
            total.innerText = total.innerText.replace("CHF ", "");
            const prix = parseFloat(total.innerText);
            if (status == 0) {
                total.innerText = "CHF " + ((parseFloat(prix)+ parseFloat(5)).toFixed(2));
                status = 1;
            } else {
                total.innerText = "CHF " + ((parseFloat(prix)- parseFloat(5)).toFixed(2));
                status = 0;
            }
        }
    </script>
@stop
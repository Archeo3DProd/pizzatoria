<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
        'nom_pizza', 'ingredients_pizza', 'prix_pizza'
    ];
}

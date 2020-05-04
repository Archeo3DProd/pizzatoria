<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $fillable = [
        'pizza_nom', 'pizza_ingredients', 'pizza_prix'
    ];
}

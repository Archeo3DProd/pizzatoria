<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    protected $fillable = [
        'token', 'pizza_nom', 'pizza_image_url', 'pizza_ingredients', 'pizza_prix'
    ];
}

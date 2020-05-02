<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{    
    // Get product category
    public function pizzas() {
        return $this->belongsTo('App\Pizzas');
    }
}

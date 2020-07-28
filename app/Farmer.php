<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    

    public function animals()
    {
        return $this->hasMany(Animal::class, 'farmer_id');
    }
}

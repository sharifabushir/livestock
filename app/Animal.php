<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    


    public function farmer()
    {
        return $this->belongsTo(Farmer::class, 'farmer_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    public function veterinarian()
    {
        return $this->belongsTo(Veterinarian::class, 'veterinarian_id');
    }
    public function animal()
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }
    public function symptom()
    {
        return $this->belongsTo(Symptom::class, 'symptom_id');
    }
    public function farmer()
    {
        return $this->belongsTo(Farmer::class, 'farmer_id');
    }
}

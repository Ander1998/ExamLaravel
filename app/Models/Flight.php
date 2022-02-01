<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    public function reserves() { 
        return $this->hasMany(reserve::class);
    }

    public function flightplanes() { 
        return $this->hasOne(flightplane::class);
    }
}

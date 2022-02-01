<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class airplane extends Model
{
    use HasFactory;

    public function flightplanes() {
        return $this->hasOne(flightplane::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flightplane extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_id',
        'airplane_id'
    ];

    public function flights() {
        return $this->belongsTo(Flight::class);
    }

    public function airplanes() { 
        return $this->belongsTo(airplane::class);
    }
}

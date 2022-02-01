<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserve extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'flight_id',
        'user_id'
    ];

    public function flights() {
        return $this->belongsTo(Flight::class);
    }

    public function users() { 
        return $this->belongsTo(User::class);
    }
}

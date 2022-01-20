<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    // Jeden Form jest wysłany przez jednego User
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarTontonan extends Model
{
    use HasFactory;

    
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    
    public function film()
    {
        return $this->belongsTo(Film::class)->withDefault();
    }
}

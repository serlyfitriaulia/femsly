<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktor extends Model
{
    use HasFactory;

    public function film_aktor()
    {
        return $this->hasMany(FilmAktor::class);
    }
}

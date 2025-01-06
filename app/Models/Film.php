<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function genre()
    {
        return $this->belongsTo(Genre::class)->withDefault();
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class);
    }

    public function film_aktor()
    {
        return $this->belongsTo(FilmAktor::class)->withDefault();
    }

    public function daftar_tontonan()
    {
        return $this->hasMany(DaftarTontonan::class);
    }

}

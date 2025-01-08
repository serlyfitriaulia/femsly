<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FilmAktor extends Model
{
    use HasFactory;

    public function film()
    {
        return $this->belongsTo('Films')->withDefault();
    }

    public function aktor() 
    {
        return $this->belongsTo('Aktor')->withDefault();
    }
}

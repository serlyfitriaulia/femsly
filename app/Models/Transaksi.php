<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $dates =['tanggal_transaksi'];
    protected $fillable = [
        'user_id', 'film_id', 'kode_transaksi', 'jenis_transaksi', 
        'jumlah', 'total_harga', 'tanggal_transaksi', 'status'
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function film()
    {
        return $this->belongsTo(Film::class)->withDefault();
    }
}

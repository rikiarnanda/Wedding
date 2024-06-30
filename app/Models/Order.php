<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'paket_id',
        'bulan',
        'status',
    ];

    // Definisi relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Definisi relasi ke Paket
    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}

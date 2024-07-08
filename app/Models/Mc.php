<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mc extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'deskripsi',
        'gambar',
    ];

    public function paket()
    {
        return $this->hasMany(Paket::class);
    }
}

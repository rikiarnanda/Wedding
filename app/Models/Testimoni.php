<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $fillable = [
        'testimoni',
        'paket_id'
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}

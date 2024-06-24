<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsep extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_konsep',
    ];
}

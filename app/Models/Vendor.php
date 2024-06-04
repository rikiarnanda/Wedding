<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendor extends Model
{
    protected $fillable = ['nama_vendor', 'gambar', 'lokasi'];

    public function crews()
    {
        return $this->hasMany(Crew::class);
    }
}

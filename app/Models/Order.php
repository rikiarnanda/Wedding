<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'konsep_id',
        'dekorasi_id',
        'dokumentasi_id',
        'vendor_id',
        'band_id',
        'mc_id',
        '_id',
        'status_id,'

    ];

    // public function vendor()
    // {
    //     return $this->belongsTo(Vendor::class);
    // }

    // public function konsep()
    // {
    //     return $this->belongsTo(Konsep::class);
    // }

    // public function dekorasi()
    // {
    //     return $this->belongsTo(Dekorasi::class);
    // }

    // public function dokumentasi()
    // {
    //     return $this->belongsTo(Dokumentasi::class);
    // }

    // public function band()
    // {
    //     return $this->belongsTo(Band::class);
    // }

    // public function mc()
    // {
    //     return $this->belongsTo(MC::class);
    // }

    // public function mua()
    // {
    //     return $this->belongsTo(MUA::class);
    // }
}

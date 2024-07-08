<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_paket',
        'gbr_paket',
        'harga',
        'vendor_id',
        'konsep_id',
        'band_id',
        'mua_id',
        'dekorasi_id',
        'dokumentasi_id',
        'mc_id'
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function konsep()
    {
        return $this->belongsTo(Konsep::class);
    }

    public function band()
    {
        return $this->belongsTo(Band::class);
    }

    public function mua()
    {
        return $this->belongsTo(Mua::class);
    }

    public function dekorasi()
    {
        return $this->belongsTo(Dekorasi::class);
    }

    public function dokumentasi()
    {
        return $this->belongsTo(Dokumentasi::class);
    }

    public function mc()
    {
        return $this->belongsTo(Mc::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

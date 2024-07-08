<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paket;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paket::create([
            'nama_paket' => 'Paket Wedding 1',
            'konsep_id' => 1,
            'band_id' => 2,
            'gbr_paket' => 'storage/paket/1719719049.jpg',
            'mua_id' => 1,
            'mc_id' => 1,
            'dekorasi_id' => 1,
            'dokumentasi_id' => 1,
            'harga' => 50000000,
            'vendor_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Paket::create([
            'nama_paket' => 'Paket Wedding 2',
            'konsep_id' => 2,
            'band_id' => 3,
            'gbr_paket' => 'storage/paket/1719719125.jpg',
            'mua_id' => 3,
            'mc_id' => 1,
            'dekorasi_id' => 2,
            'dokumentasi_id' => 2,
            'harga' => 65000000,
            'vendor_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Paket::create([
            'nama_paket' => 'Paket Wedding 3',
            'konsep_id' => 1,
            'band_id' => 1,
            'gbr_paket' => 'storage/paket/1719719201.jpg',
            'mua_id' => 1,
            'mc_id' => 2,
            'dekorasi_id' => 1,
            'dokumentasi_id' => 1,
            'harga' => 70000000,
            'vendor_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

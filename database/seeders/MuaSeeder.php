<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mua;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class MuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mua::create([
            'nama' => 'Lisa MUA',
            'deskripsi' => 'Lisa MUA dikenal dengan teknik makeup yang flawless dan natural. Sangat berpengalaman dalam bridal makeup.',
            'gambar' => 'R4fp0XoK2xivLko5dQsZrVTt7dCoOdmwzQADMXAG.jpg', // Sesuaikan dengan path yang benar
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Mua::create([
            'nama' => 'Rani MUA',
            'deskripsi' => 'Rani MUA ahli dalam makeup bold dan glamor. Memiliki banyak klien selebriti dan pengantin.',
            'gambar' => 'XSDSZDfgVsWxBA5DqrG9LrTn9vD2CSMblrpcad5a.jpg', // Sesuaikan dengan path yang benar
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Mua::create([
            'nama' => 'Autentik MUA',
            'deskripsi' => 'Autentik MUA terkenal dengan makeup tradisional yang menawan. Sering menjadi pilihan untuk acara pernikahan adat.',
            'gambar' => 'nNMPidHLEpeAh2E6ewGAcXeVTM4SXHzfrnc2Y4a4.jpg', // Sesuaikan dengan path yang benar
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

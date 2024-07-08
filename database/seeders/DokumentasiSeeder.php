<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dokumentasi;
use Carbon\Carbon;

class DokumentasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dokumentasi::create([
            'nama' => 'Lemia Project',
            'deskripsi' => 'Cakupan selama 12 jam. Tim terdiri dari 2 Fotografer, 2 Videografer. 200 file diedit. 2 Cetak kanvas ukuran 60x40 spanram. Album semi-premium ukuran 20x30 dengan 40 halaman. Video teaser pernikahan selama 60 detik. Output video sinematik hingga 10 menit. Semua file raw dan diedit tersedia melalui Google Drive.',
            'gambar' => 'gYoJ6FuHwVcRX12IfFXRrQveHkYbyBL2LnBGCsKT.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Dokumentasi::create([
            'nama' => 'Lexa Documentation',
            'deskripsi' => 'Coverage selama 10 jam. 1 Fotografer profesional. 1 Videografer berpengalaman. 150 file diedit. 1 cetakan kanvas 50x30 spanram. Video highlight pernikahan 5 menit. Semua file raw diserahkan dalam bentuk USB drive.',
            'gambar' => 'WNc0JsAWcZlfZLMAMcGsLnTgq93FLHkQPxqppZXL.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

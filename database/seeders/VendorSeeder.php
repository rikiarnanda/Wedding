<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendor;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendor::create([
            'nama_vendor' => 'Perfect Day Planners',
            'gambar' => 'oQ6426OJDd4xRYJAPqdme8c61cgxuZvtSNtqlwa1.png', // Sesuaikan dengan path yang benar
            'lokasi' => 'Medan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Vendor::create([
            'nama_vendor' => 'Dream Weddings',
            'gambar' => 'vVfpTLTWqahEgQYThIEcte5qcMxUBwh0JrzgTa4j.jpg', // Sesuaikan dengan path yang benar
            'lokasi' => 'Medan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

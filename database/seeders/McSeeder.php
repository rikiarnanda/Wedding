<?php

namespace Database\Seeders;

use App\Models\Mc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class McSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mc::create([
            'nama' => 'Shevia',
            'gambar' => '', // Sesuaikan dengan path yang benar
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        Mc::create([
            'nama' => 'Robby',
            'gambar' => '', // Sesuaikan dengan path yang benar
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        //
    }
}

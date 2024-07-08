<?php

namespace Database\Seeders;

use App\Models\Dokumentasi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            VendorSeeder::class,
            KonsepSeeder::class,
            CrewSeeder::class,
            BandSeeder::class,
            MuaSeeder::class,
            DokumentasiSeeder::class,
            DekorasiSeeder::class,
            McSeeder::class,
            PaketSeeder::class,

        ]);
    }
}

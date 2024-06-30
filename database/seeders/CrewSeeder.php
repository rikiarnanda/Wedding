<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Crew;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class CrewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Crew::create([
            'nama' => 'Roby',
            'link_gbr' => 'storage/crew/1719716473.jpg', // Sesuaikan dengan path yang benar
            'posisi' => 'Technician',
            'vendor_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Crew::create([
            'nama' => 'Gita',
            'link_gbr' => 'storage/crew/1719716520.jpg', // Sesuaikan dengan path yang benar
            'posisi' => 'Decorator',
            'vendor_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Crew::create([
            'nama' => 'David',
            'link_gbr' => 'storage/crew/1719716624.jpg', // Sesuaikan dengan path yang benar
            'posisi' => 'Photographer',
            'vendor_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Crew::create([
            'nama' => 'Jane',
            'link_gbr' => 'storage/crew/1719716663.jpg', // Sesuaikan dengan path yang benar
            'posisi' => 'Event Manager',
            'vendor_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Band;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class BandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Band::create([
            'nama' => 'The Beatles',
            'deskripsi' => 'Band legendaris asal Inggris yang terkenal dengan lagu-lagu hitsnya seperti "Hey Jude" dan "Let It Be".',
            'gambar' => 'GNn2rAvKvS3q8wSfSxW9E5mg1LzjKZS0X5sI69Ei.jpg', // Sesuaikan dengan path yang benar
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Band::create([
            'nama' => 'Avenged',
            'deskripsi' => 'Band lokal dengan genre progressive rock yang menggabungkan teknik bermain yang rumit dan komposisi musik yang kompleks.',
            'gambar' => '40mPkSKXKnskBWo58mmAQpDCGclBN24KxjdxxPxN.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Band::create([
            'nama' => 'Technical Project',
            'deskripsi' => 'Band indie dengan sentuhan musik folk dan pop, terkenal dengan lirik-lirik yang puitis dan melodi yang easy listening.',
            'gambar' => 'TgNvcR4ZOrETxeIMXix7vl3FDzI6zT4jka5q5ApJ.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

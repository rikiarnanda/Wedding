<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Konsep;
use Carbon\Carbon;

class KonsepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Konsep::create([
            'nama' => 'Modern',
            'deskripsi' => 'Konsep modern menampilkan dekorasi yang minimalis, elegan, dan menggunakan teknologi terkini. Cocok untuk pasangan yang menginginkan suasana pernikahan yang stylish dan up-to-date.',
            'gambar' => '4qxw9Sa2lAaVpG3PkJB8pR04kjeBMa4irtK1MdK8.jpg', // Sesuaikan dengan path yang benar
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Konsep::create([
            'nama' => 'Tradisional',
            'deskripsi' => 'Konsep tradisional mengusung nilai-nilai budaya lokal dengan dekorasi adat yang kental dan upacara pernikahan yang sesuai dengan tradisi. Cocok untuk pasangan yang ingin melestarikan budaya dan adat istiadat dalam pernikahan mereka.',
            'gambar' => 'i5w13sVF2nit83GqkkLvfDLbctO0yvaA9jBh4Zmp.jpg', // Sesuaikan dengan path yang benar
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dekorasi;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class DekorasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dekorasi::create([
            'nama' => 'Glathia Decor',
            'deskripsi' => 'Wedding backdrop up to 12 meter, one set of sofa, carpet coverage for stage, mini garden, standing flower artificial 6 pcs, rose petal carpet, wedding gate (2 pillar), black/white melaminto dance floor 4x4 meter, flowers garden for dance floor area, round table centerpiece max. 15 table, bridal table centerpiece 6 seater, accessories for bridal table, angpao backdrop curtains, standing angpao max. 3 pcs, backdrop photo gallery, frame screen (if any), wedding signage, standard lighting ambiance.',
            'gambar' => 'IFT2UH36V38UXuLiQ6hZmVTuOOygBQ9ZwvjEBwB7.jpg', // Sesuaikan dengan path yang benar
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Dekorasi::create([
            'nama' => 'Clover',
            'deskripsi' => 'Layanan kami mencakup backdrop pernikahan yang memukau, rangkaian sofa mewah, dan penutup karpet panggung yang mengubah suasana. Temukan keindahan alam dengan taman mini yang mengagumkan dan tampilan bunga artifisial yang hidup. Langkahkan kaki Anda di atas karpet kelopak mawar kami dan melalui gerbang pernikahan yang mempesona menuju lantai dansa yang dihiasi dengan melaminto hitam dan putih. Nikmati keindahan taman bunga di area lantai dansa dan centerpiece meja yang memukau, dilengkapi dengan pengaturan meja pengantin yang personal dan aksen dekorasi yang memikat. Tangkap momen-momen abadi dengan galeri backdrop kami, layar frame inovatif, dan pencahayaan suasana yang memikat.',
            'gambar' => '7prEF1u736Quggv7o3LbEytwh9MPVVY58RtTHRmk.jpg', // Sesuaikan dengan path yang benar
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

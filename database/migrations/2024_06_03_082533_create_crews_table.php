<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crews', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Menambahkan kolom nama
            $table->string('link_gbr'); // Menambahkan kolom gambar
            $table->string('posisi'); // Menambahkan kolom posisi
            $table->foreignId('vendor_id')->constrained(); // Menambahkan foreign key yang terhubung ke tabel vendors
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crews');
    }
};

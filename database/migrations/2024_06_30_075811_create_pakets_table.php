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
        Schema::create('pakets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->foreignId('konsep_id')
                ->constrained('konseps') // Pastikan ini mengacu pada nama tabel yang benar
                ->onDelete('cascade')   // CASCADE pada DELETE
                ->onUpdate('cascade');
            $table->foreignId('band_id')
                ->constrained('bands') // Pastikan ini mengacu pada nama tabel yang benar
                ->onDelete('cascade')   // CASCADE pada DELETE
                ->onUpdate('cascade');
            $table->string('gbr_paket');
            $table->foreignId('mua_id')
                ->constrained('muas') // Pastikan ini mengacu pada nama tabel yang benar
                ->onDelete('cascade')   // CASCADE pada DELETE
                ->onUpdate('cascade');
            $table->string('mc');
            $table->foreignId('dekorasi_id')
                ->constrained('dekorasis') // Pastikan ini mengacu pada nama tabel yang benar
                ->onDelete('cascade')   // CASCADE pada DELETE
                ->onUpdate('cascade');
            $table->foreignId('dokumentasi_id')
                ->constrained('dokumentasis') // Pastikan ini mengacu pada nama tabel yang benar
                ->onDelete('cascade')   // CASCADE pada DELETE
                ->onUpdate('cascade');
            $table->string('harga');
            $table->foreignId('vendor_id')
                ->constrained('vendors') // Pastikan ini mengacu pada nama tabel yang benar
                ->onDelete('cascade')   // CASCADE pada DELETE
                ->onUpdate('cascade');
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
        Schema::dropIfExists('pakets');
    }
};

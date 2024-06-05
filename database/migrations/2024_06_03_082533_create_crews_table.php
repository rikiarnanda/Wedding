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
            $table->string('nama');
            $table->string('link_gbr');
            $table->string('posisi');
            $table->foreignId('vendor_id')
                ->constrained('vendors') // Pastikan ini mengacu pada nama tabel yang benar
                ->onDelete('cascade')   // CASCADE pada DELETE
                ->onUpdate('cascade');  // CASCADE pada UPDATE
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

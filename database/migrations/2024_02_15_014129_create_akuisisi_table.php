<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('akuisisi', function (Blueprint $table) {
            $table->id('id_akuisisi');
            $table->date('tgl_efektif');
            $table->string('nomor_dokumen');
            $table->string('kategori_dokumen');
            $table->string('versi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akuisisi');
    }
};

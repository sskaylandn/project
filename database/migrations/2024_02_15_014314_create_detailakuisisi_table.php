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
        Schema::create('detailakuisisi', function (Blueprint $table) {
            $table->id('id_detailakuisisi');
            $table->string('id_pemegang');
            $table->string('id_akuisisi');
            $table->string('akses_user');
            $table->string('power_lock');
            $table->string('sinkronisasi_waktu');
            $table->string('antivirus');
            $table->string('update_os');
            $table->string('scan_malware');
            $table->string('versi_os');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailakuisisi');
    }
};

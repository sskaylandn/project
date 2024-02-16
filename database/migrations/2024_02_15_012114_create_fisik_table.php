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
        Schema::create('fisik', function (Blueprint $table) {
            $table->id('id_fisik');
            $table->string('nama_fisik');
            $table->string('jumlah_fisik');
            $table->date('tglperiksa_fisik');
            $table->string('status_fisik');
            $table->string('tindak_lanjut');
            $table->string('pic_fisik');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fisik');
    }
};

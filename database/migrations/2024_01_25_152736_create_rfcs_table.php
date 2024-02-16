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
        Schema::create('rfc', function (Blueprint $table) {
            $table->id('id_rfc');
            $table->date('tgl_req');
            $table->string('pengaju');
            $table->text('detail');
            $table->enum('acc', ['Disetujui','Tidak setuju','Belum disetujui'])->default('Belum disetujui');
            $table->string('penyetuju')->nullable();
            $table->text('alasan')->nullable();
            $table->date('tgl_acc')->nullable();
            $table->text('tindak_lanjut')->nullable();
            $table->date('tgl_perubahan')->nullable();
            $table->date('tgl_selesai')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rfc');
    }
};

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
        Schema::create('monitoring', function (Blueprint $table) {
            $table->id('id_monitoring');
            $table->string('nama_perangkat');
            $table->string('lokasi');
            $table->string('max');
            $table->date('tgl_monitoring');
            $table->integer('cpu');
            $table->integer('ram');
            $table->integer('disk');
            $table->text('tindak_lanjut');
            $table->string('pj');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitoring');
    }
};

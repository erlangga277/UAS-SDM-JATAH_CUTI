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
        Schema::create('pengajuan_cutis', function (Blueprint $table) {
        $table->id();
        $table->date('tanggal_awal');
        $table->date('tanggal_akhir');
        $table->integer('jumlah');
        $table->string('ket', 100);
        $table->string('status', 10);
        $table->string('nip', 20); // SAMA dengan pegawais.nip

        $table->foreign('nip')->references('nip')->on('pegawais')->onDelete('cascade')->onUpdate('cascade');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_cutis');
    }
};

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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->string('nip', 20)->primary();
            $table->char('gender', 1);
            $table->string('tmp_lahir', 45);
            $table->date('tgl_lahir');
            $table->string('telepon', 20);
            $table->string('alamat', 100);
            $table->unsignedBigInteger('manager_id');
            $table->string('foto')->nullable();
            $table->timestamps();

            $table->foreign('manager_id')->references('id')->on('divisis')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};

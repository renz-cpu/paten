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
        Schema::create('makektps', function (Blueprint $table) {
            $table->id('nik');
            $table->string('nama_lengkap');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('email');
            $table->string('nomor_telepon');
            $table->string('foto_diri');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makektps');
    }
};

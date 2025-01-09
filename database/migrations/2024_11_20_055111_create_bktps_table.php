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
        Schema::create('bktps', function (Blueprint $table) {
            $table->id('nik');
            $table->string('nama');
            $table->string('tmpt');
            $table->date('tgl');
            $table->string('pk');
            $table->string('stts');
            $table->string('almt');
            $table->string('agama');
            $table->string('email');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kcmtn');
            $table->string('klrhn');
            $table->string('rt');
            $table->string('rw');
            $table->string('gender');
            $table->string('gol');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bktps');
    }
};

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
        Schema::create('kelas_inti', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kategori_id');
            $table->text('deskripsi');
            $table->integer('harga');
            $table->string('gambar')->default('placeholder.jpg');
            // ... tambahkan kolom lain yang diperlukan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas_inti');
    }
};

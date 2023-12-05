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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('nama');
            $table->text('deskripsi');
            $table->decimal('harga', 10, 2); // Harga kelas
            $table->string('gambar')->default('accountimage.png');
            $table->boolean('status')->default(true); // Status kelas (aktif/tidak aktif)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};

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
            $table->foreignId('kelas_inti_id');
            $table->foreignId('category_id');
            $table->string('nama');
            $table->string('link_vid')->default('https://www.youtube.com/embed/v-U7UJ4iKZ8?si=u9gpwl4Vw-F05tF-');
            $table->text('deskripsi');            
            $table->string('gambar')->default('placeholder.jpg');
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

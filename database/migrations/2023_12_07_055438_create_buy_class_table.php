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
        Schema::create('buy_class', function (Blueprint $table) {
            $table->id();            
            $table->string('no_pesan')->unique();
            $table->foreignId('user_id');
            $table->foreignId('kelas_id');
            $table->string('nama_customer');
            $table->string('email_customer');
            $table->integer('total')->nullable();
            $table->text('deskripsi')->nullable();
            $table->enum('status', ['cancel', 'pending', 'progress', 'completed'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_class');
    }
};

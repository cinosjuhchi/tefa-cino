<?php

namespace Database\Seeders;

use App\Models\PembelianKelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PembelianKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PembelianKelas::factory()->count(30)->create();
    }
}

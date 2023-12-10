<?php

namespace Database\Seeders;

use App\Models\KelasInti;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasIntiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KelasInti::factory()->count(30)->create();
    }
}

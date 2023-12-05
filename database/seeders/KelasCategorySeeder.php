<?php

namespace Database\Seeders;

use App\Models\KelasCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KelasCategory::factory()->count(4)->create();
    }
}

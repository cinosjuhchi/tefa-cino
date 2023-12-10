<?php

namespace Database\Factories;

use App\Models\KelasCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KelasCategory>
 */
class KelasCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = KelasCategory::class;
    public function definition(): array
    {
        static $index = 0;
        $kategori = ['RPL', 'AKL', 'BDP', 'OTKP'];
        return [
            "title" => $kategori[$index++],
            "body" => $this->faker->paragraph(3),
        ];
    }
}

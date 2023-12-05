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
        $kategori = $this->faker->randomElement(['RPL', 'AKL', 'BDP', 'OTKP']);
        return [
            "title" => $kategori,
            "body" => $this->faker->paragraph(3),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\KelasInti;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KelasInti>
 */
class KelasIntiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = KelasInti::class;
    public function definition(): array
    {
        return [
            'nama' => $this->faker->title(),
            'kategori_id' => $this->faker->randomElement([1, 2, 3, 4]),
            'deskripsi' => $this->faker->paragraph(7),            
            'harga' => $this->faker->numberBetween(30000, 900000),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kelas;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Kelas::class;
    public function definition(): array
    {
        $namaKelas = $this->faker->unique()->words(3, true);
        $kategori = $this->faker->randomElement([1,2,3,4]);

        return [
            'kelas_inti_id' => $this->faker->numberBetween(1, 30),
            'nama' => $namaKelas,
            'deskripsi' => $this->faker->paragraph(3),            
            'status' => $this->faker->boolean(),
            'category_id' => $kategori,
        ];
    }
}

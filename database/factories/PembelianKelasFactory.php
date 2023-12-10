<?php

namespace Database\Factories;

use App\Models\PembelianKelas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PembelianKelas>
 */
class PembelianKelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PembelianKelas::class;
    public function definition(): array
    {
        $userId = $this->faker->numberBetween(1, 2);
        $kelasId = $this->faker->unique()->numberBetween(1, 30); // Mengubah rentang id kelas menjadi 1-30 dengan nilai unik
    
        // Logika untuk memastikan user_id tidak sama dengan kelas_id
        while (PembelianKelas::where('user_id', $userId)->where('kelas_inti_id', $kelasId)->exists()) {
            $kelasId = $this->faker->unique()->numberBetween(1, 30);
        }
        return [
        'user_id' => $userId,
        'kelas_inti_id' => $kelasId,
        'tanggal_pembelian' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

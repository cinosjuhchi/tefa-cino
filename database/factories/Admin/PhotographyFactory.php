<?php

namespace Database\Factories\Admin;

use App\Models\Admin\PhotographyPlan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Photography>
 */
class PhotographyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'photography_plan_id' => PhotographyPlan::inRandomOrder()->value('id'),
            'name_customer' => fake('id_ID')->name(),
            'number_customer' => fake('id_ID')->phoneNumber(),
            'email_customer' => fake('id_ID')->safeEmail(),
            'description' => fake()->sentence(),
        ];
    }
}

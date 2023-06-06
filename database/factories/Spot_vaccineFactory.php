<?php

namespace Database\Factories;

use App\Models\Spot;
use App\Models\Vaccine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Spot_vaccine>
 */
class Spot_vaccineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'spot_id' => Spot::factory(),
            'vaccine_id' => Vaccine::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
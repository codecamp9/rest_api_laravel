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

        $spot = Spot::inRandomOrder()->first();
        $vaccine = Vaccine::inRandomOrder()->first();

        return [
            'spot_id' => $spot->id,
            'vaccine_id' => $vaccine->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
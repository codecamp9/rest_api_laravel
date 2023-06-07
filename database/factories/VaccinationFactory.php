<?php

namespace Database\Factories;

use App\Models\Medical;
use App\Models\Societie;
use App\Models\Spot;
use App\Models\Vaccine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vaccination>
 */
class VaccinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dose' => $this->faker->randomElement(['1', '2']),
            'date' => $this->faker->date('Y-m-d'),
            'society_id' => Societie::factory(),
            'spot_id' => Spot::factory(),
            'vaccine_id' => Vaccine::factory(),
            'doctor_id' => Medical::factory(),
            'officer_id' => Medical::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
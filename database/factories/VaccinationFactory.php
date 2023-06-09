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

        $societie = Societie::inRandomOrder()->first();
        $spot = Spot::inRandomOrder()->first();
        $vaccine = Vaccine::inRandomOrder()->first();
        $medical = Medical::inRandomOrder()->first();

        return [
            'dose' => $this->faker->randomElement(['1', '2']),
            'date' => now(),
            'society_id' => $societie->id,
            'spot_id' => $spot->id,
            'vaccine_id' => $vaccine->id,
            'doctor_id' => $medical->id,
            'officer_id' => $medical->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
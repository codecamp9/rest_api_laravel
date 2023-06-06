<?php

namespace Database\Factories;

use App\Models\Spot;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medical>
 */
class MedicalFactory extends Factory
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
            'user_id' => User::factory(),
            'role' => $this->faker->randomElement(['officer', 'doctor']),
            'name' => $this->faker->name(),
        ];
    }
}
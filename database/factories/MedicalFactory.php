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

        $spot = Spot::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();

        return [
            'spot_id' => $spot->id,
            'user_id' => $user->id,
            'role' => $this->faker->randomElement(['officer', 'doctor']),
            'name' => $this->faker->name(),
        ];
    }
}
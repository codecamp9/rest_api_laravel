<?php

namespace Database\Factories;

use App\Models\Regional;
use App\Models\Spot;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Spot>
 */
class SpotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'regional_id' => Regional::factory(),
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'serve' => $this->faker->randomDigit(),
            'capacity' => $this->faker->randomDigit(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
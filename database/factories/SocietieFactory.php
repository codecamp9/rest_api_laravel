<?php

namespace Database\Factories;

use App\Models\Regional;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Societie>
 */
class SocietieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genders = ['male', 'female'];

        return [
            'id_card_number' => $this->faker->randomNumber(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'name' => $this->faker->name(),
            'born_date' => $this->faker->date('Y-m-d'),
            'gender' => $this->faker->randomElement($genders),
            'address' => $this->faker->address(),
            'regional_id' => Regional::factory(),
            'login_tokens' => $this->faker->randomNumber(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
<?php

namespace Database\Factories;

use App\Models\Medical;
use App\Models\Societie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consultation>
 */
class ConsultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $societie = Societie::inRandomOrder()->first();
        $medical = Medical::inRandomOrder()->first();


        return [
            'society_id' => $societie->id,
            'doctor_id' => $medical->id,
            'status' => $this->faker->randomElement(['pending','accepted', 'declined']),
            'disease_history' => $this->faker->randomElement(['flu', 'tipes', 'dbd']),
            'current_symptoms' => $this->faker->randomElement(['batuk', 'pilek']),
            'doctor_notes' => $this->faker->randomElement(['OK', 'Not OK']),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
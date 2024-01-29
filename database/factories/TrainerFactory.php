<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainer>
 */
class TrainerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone'=> fake()->phoneNumber(),
            'email'=> fake()->unique()->safeEmail(),
            'specialty' => fake()->word(),
            'image' => fake()->image(null, 640, 480),
        ];
    }
}

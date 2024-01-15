<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(1, true), // To output a string not an array || also name(),
            // 'email' => fake()->unique()->safeEmail(),
            'category_id' => Category::all()->random()->id,
            'trainer_id' => Trainer::all()->random()->id,
            'brief' => fake()->sentence(5),
            'description' => fake()->sentence(),
            'price' => fake()->randomNumber(5, false),
            'image' => fake()->image(null, 640, 480)
        ];
    }
}

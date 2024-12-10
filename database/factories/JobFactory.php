<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'description' => fake()->paragraph,
            'salary' => fake()->randomElement(['50,000 PKR', '70,000 PKR', '90,000 PKR', '100,000 PKR', '150,000 PKR', '200,000 PKR']),
            'location' => fake()->city,
            'position' => fake()->randomElement(['Part-Time', 'Full-Time']),
            'url' => fake()->url
        ];
    }
}

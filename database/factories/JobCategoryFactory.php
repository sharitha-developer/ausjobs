<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobsCategory>
 */
class JobsCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' => fake()->randomElement(['IT', 'Marketing', 'Finance', 'Healthcare', 'Education', 'Construction', 'Retail', 'Hospitality', 'Manufacturing', 'Transportation']),
        ];
    }
}

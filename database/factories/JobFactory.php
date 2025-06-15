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
            'title' => fake()->jobTitle(),
            'location' => fake()->city(),
            'company_name' => fake()->company(),
            'salary' => fake()->randomElement(['$50k - $55k' , '$55k - $60k','$60k - $65k', '$65k - $70k', '$70k - $75k', '$75k - $80k', '$80k - $85k','$85k - $90k']),
            'description' => fake()->realText(),
            'schedule' => fake()->randomElement(['Full Time', 'Part Time', 'Freelancer']),
            'work_loc' => fake()->randomElement(['On premise', 'Hybrid', 'Remote']),
            'url' => fake()->url(),
            'featured' => fake()->randomElement([true, false]),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
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
            'ssn' => fake()->unique()->ssn(),
            'birth_date' => fake()->date(),
            'email' => fake()->unique()->safeEmail(),
            'gender' => fake()->randomElement(['F', 'M'])
        ];
    }
}

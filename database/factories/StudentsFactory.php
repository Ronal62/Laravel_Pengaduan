<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_students' => rand(1, 9999999),
            'full_name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'address' => '',
            'phone' => rand(1, 999999),
            'gender' => 'M'
        ];
    }
}

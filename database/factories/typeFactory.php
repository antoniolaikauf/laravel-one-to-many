<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\type>
 */
class typeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'in_gruppo' => fake()->boolean(),
            'risorse_usate' => fake()->randomElement(['umane', 'strumentali ', 'finanziare']),
        ];
    }
}

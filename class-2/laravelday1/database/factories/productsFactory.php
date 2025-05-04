<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class productsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'  =>fake()->unique()->sentence(),
            'description'  =>fake()->unique()->paragraph('2'),
            'category'=>fake()->word(),
            'price'=>fake()->randomFloat(2, 5, 100),
            'rating'=>fake()->randomFloat(2, 0, 5),
            'stock'=>fake()->randomDigit(),
            'brand'=>fake()->word(),
            'weight'=>fake()->randomFloat(),
        ];
    }
}

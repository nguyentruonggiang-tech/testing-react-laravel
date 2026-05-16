<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'img' => '/assets/pic' . rand(1, 5) . '.jpg',
            'brand' => $this->faker->randomElement(['Nike', 'Adidas', 'Puma', 'Sketchers']),
            'title' => $this->faker->sentence(3),
            'rating' => $this->faker->randomFloat(1, 3, 5),
            'reviews' => $this->faker->numberBetween(0, 100),
            'sellPrice' => $this->faker->numberBetween(50000, 500000),
            'orders' => (string) $this->faker->numberBetween(0, 1000),
            'mrp' => $this->faker->numberBetween(50000, 1000000),
            'discount' => $this->faker->numberBetween(0, 50),
            'category' => $this->faker->randomElement(['men', 'women', 'child']),
        ];
    }
}

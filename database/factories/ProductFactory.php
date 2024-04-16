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
            'user_id'=>1,
            'name'=>"Producto: " . fake('es')->unique()->word(),
            'description'=>"Producto: " . fake('es')->sentence(6),
            'image'=>fake()->imageUrl(),
            'price' => fake()->randomFloat(2, 0, 1000),

        ];
    }
}

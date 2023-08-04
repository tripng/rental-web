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
        $name_product = [
            'Kostum Cosplay Anime Jepang Anak Nezuko',
            'Kostum Cosplay Anime Spy X Family Anya',
            'Jaket Genshin Impact Kostum Anime Hoodie',
            'Jaket Naruto Hokage 7 - Kostum Anime Cosplay',
            'Kostum Cosplay Anime Jujutsu Kaisen'
        ];
        return [
            'name' => fake()->randomElement($name_product),
            'description' => fake()->paragraph(random_int(3, 6)),
            'price' => fake()->numberBetween(100000, 1000000),
            'stock' => fake()->randomNumber(3, true),
            'quantity_sold' => fake()->randomNumber(3, false),
            'rating' => fake()->numberBetween(1, 5)
        ];
    }
}

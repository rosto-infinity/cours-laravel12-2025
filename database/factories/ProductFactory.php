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
            "title" =>$this->faker->words(3, true),
            "category" => $this->faker->randomElement(['Information Technology', 'Home Appliances', 'Books', 'Clothing', 'Sports Equipment']),
            "price" =>$this->faker->numberBetween(1000,300000),
            //
        ];
    }
}

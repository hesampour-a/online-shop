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
            'title' => fake()->randomElement(['canon 400D', 's20', 'thinkpad', 'beutiful desk', 'diesel', 'dell 2500 ultra']),
            'fa_title' => fake()->randomElement(['دوربین عکاسی', 'موبایل سامسونگ', 'لپ تاپ دل', 'موس گرین', 'هدفون هیلو', 'میز تحریر']),
            'description' => fake()->paragraph,
            'garanty' => fake()->title(),
            'long_description' => fake()->paragraphs(3, true),
            'count' => fake()->numberBetween(1, 200),
            'price' => fake()->numberBetween(100000, 100000000)

        ];
    }
}

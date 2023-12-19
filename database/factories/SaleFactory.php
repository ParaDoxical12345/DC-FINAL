<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id'   =>fake()->numberBetween(1,100),
            'date'          =>fake()->date(),
            'is_credited'   =>fake()->numberBetween(0,1),
            'user_id'       =>fake()->numberBetween(1,100),
        ];
    }
}

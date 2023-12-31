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
            'name'      =>fake()->firstname(). ' ' .fake()->lastname(),
            'address'   =>fake()->address(),
            'phone'     =>fake()->numerify('###########'),
            'balance'   =>fake()->numberBetween(100,10000)
        ];
    }
}

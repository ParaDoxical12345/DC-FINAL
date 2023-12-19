<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sold_Item>
 */
class Sold_ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'merchandise_id'    =>fake()->numberBetween(1,100),
            'sale_id'           =>fake()->numberBetween(1,100),
            'qty'               =>fake()->numberBetween(10,1000),
            'selling_price'     =>fake()->numberBetween(10,1000)
        ];
    }
}

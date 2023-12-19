<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchased_Item>
 */
class Purchased_ItemFactory extends Factory
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
            'purchase_id'       =>fake()->numberBetween(1,100),
            'whole_sale_qty'    =>fake()->numberBetween(10,1000),
            'purchase_price'    =>fake()->numberBetween(100,10000)
        ];
    }
}

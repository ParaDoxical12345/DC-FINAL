<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase>
 */
class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date'          =>fake()->date(),
            'supplier_id'   =>fake()->numberBetween(1,100),
            'total'         =>fake()->numberBetween(10,1000),
            'invoice_no'    =>fake()->numerify('###########'),
            'user_id'       =>fake()->numberBetween(1,100)
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillFactory extends Factory
{

    public function definition()
    {
        return [
            'title' => fake()->title(),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(1, 1000),
        ];
    }
}

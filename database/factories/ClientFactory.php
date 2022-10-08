<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{

    public function definition()
    {
        return [
            'firstname' => fake()->firstName,
            'lastname' => fake()->lastName,
            'address' => fake()->streetAddress,
            'zipcode' => fake()->postcode,
            'city' => fake()->city,
            'phone' => fake()->phoneNumber,
            'email' => fake()->email,
            'user_id' => fake()->numberBetween(1, 3),
        ];
    }
}

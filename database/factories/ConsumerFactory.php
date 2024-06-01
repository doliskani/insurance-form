<?php

namespace Database\Factories;

use App\Models\Consumer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consumer>
 */
class ConsumerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "first_name" => $this->faker->firstName,
            "last_name" => $this->faker->lastName,
            "email" => $this->faker->unique()->safeEmail,
            "phone" => $this->faker->unique()->phoneNumber,
            "contact_preference" => $this->faker->randomElement(Consumer::CONTACT_PREFERENCE),
            "street" => $this->faker->streetAddress,
            "apartment" => $this->faker->numberBetween(0 , 200),
            "city" => $this->faker->city,
            "state" => $this->faker->state,
            "zipcode" => $this->faker->postcode
        ];
    }
}

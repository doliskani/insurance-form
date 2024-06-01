<?php

namespace Database\Factories;

use App\Models\Consumer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Submission>
 */
class SubmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // "consumer_id" => true,
            "agreement" => true,
            "home_insurance" => $this->faker->boolean,
            "auto_insurance" => $this->faker->boolean,
            "recreational_vehicle_insurance" => $this->faker->boolean,
        ];
    }



       /**
     * set sound for the content.
     */
    public function consumer(?string $consumerId = null): Factory
    {
        return $this->state(function (array $attributes) use($consumerId){
            return [
                'consumer_id' => $consumerId ?? Consumer::factory()->create()
            ];
        });
    }

}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'time_from' => $this->faker->time('H:i'),
            'time_to' => $this->faker->time('H:i'),
            'image' => $this->faker->imageUrl(),
            'rank' => $this->faker->randomFloat(1, 1, 5),
            'price' => $this->faker->randomElement(['$', '$$', '$$$', '$$$$']),
            
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dish>
 */
class DishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'restaurant_id' => RestaurantFactory::new()->create()->id,
            'name' => $this->faker->word,
            'price' => $this->faker->numberBetween(10000, 100000),
            'image' => $this->faker->imageUrl(),
        ];
    }
}

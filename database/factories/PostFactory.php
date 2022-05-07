<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'user_id' => UserFactory::new()->create()->id,
            'restaurant_id' => RestaurantFactory::new()->create()->id,
            'location' => $this->faker->randomFloat(1, 1, 5),
            'price' => $this->faker->randomFloat(1, 1, 5),
            'quality' => $this->faker->randomFloat(1, 1, 5),
            'service' => $this->faker->randomFloat(1, 1, 5),
            'space' => $this->faker->randomFloat(1, 1, 5),
        ];
    }
}

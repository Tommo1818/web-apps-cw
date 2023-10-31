<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Follower>
 */
class FollowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->unique()->randomNumber(),
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'favourite_player' => $this->faker->randomElement(\App\Models\Player::pluck('in_game_name')->toArray()),
        ];
    }
}
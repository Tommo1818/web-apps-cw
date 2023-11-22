<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'in_game_name' => $this->faker->name,
            'date_of_birth' => $this->faker->date(),
            'team_id' => \App\Models\Team::all()->random()->id,
            'country' => $this->faker->country,
        ];
    }
}



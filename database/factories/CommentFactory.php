<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Player;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $totalUsers = User::count();
        $totalPlayers = Player::count();
        $randomUser = rand(1, $totalUsers);
        $randomPlayer = rand(1, $totalPlayers);
        return [
            'comment' => $this->faker->text(),
            'player_id' => \App\Models\Player::factory(),
            'user_id' => $randomUser,
            'player_id' => $randomPlayer,
        ];
    }
}

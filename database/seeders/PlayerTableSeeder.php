<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $players = [
            [
                'player_id' => 1,
                'in_game_name' => 's1mple',
                'date_of_birth' => '1997-10-02',
                'roles' => 'AWP, Rifler',
                'team_id' => 1,
                'country' => 'Ukraine',
                // link a random follower from the follower table here
                'follower_id' => 

            ],
            [
                'player_id' => 2,
                'in_game_name' => 'electronic',
                'date_of_birth' => '1998-12-28',
                'roles' => 'Rifler',
                'team_id' => 1,
                'country' => 'Ukraine',

            ],
            [
                'player_id' => 3,
                'in_game_name' => 'flamie',
                'date_of_birth' => '1997-04-05',
                'roles' => 'Rifler',
                'team_id' => 1,
                'country' => 'Ukraine',

            ],
            [
                'player_id' => 4,
                'in_game_name' => 'Boombl4',
                'roles' => 'IGL',
                'date_of_birth' => '1998-10-20',
                'team_id' => 1,
                'country' => 'Russia',

            ],
            [
                'player_id' => 5,
                'in_game_name' => 'Perfecto',
                'roles' => 'Rifler',
                'date_of_birth' => '2000-01-01',
                'team_id' => 1,
                'country' => 'Russia',
            ],
            [
                'player_id' => 6,
                'in_game_name' => 'bl4de',
                'roles' => 'Coach',
                'date_of_birth' => '1996-01-01',
                'team_id' => 1,
                'country' => 'Russia',
            ],
        ]
    }
}

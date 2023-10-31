<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'role' => 'awper',
                'player_id' => 1,
            ],
            [
                'role' => 'entry',
                'player_id' => 2,
            ],
            [
                'role' => 'support',
                'player_id' => 3,
            ],
            [
                'role' => 'igl',
                'player_id' => 4,
            ],
            [
                'role' => 'lurker',
                'player_id' => 5,
            ],
            [
                'role' => 'coach',
                'player_id' => 6,
            ],
        ];
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'team_id' => 1,
                'name' => 'Natus Vincere',
                'country' => 'Ukraine',
                'sponsor_id' => 1,

            ]
        ]
    }
}

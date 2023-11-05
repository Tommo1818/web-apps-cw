<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = new Team;
        $a->id = 1;
        $a->name = 'Natus Vincere';
        $a->country = 'Ukraine';
        $a->sponsor_id = 1;
        $a->save();
    }
}

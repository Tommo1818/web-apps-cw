<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tournament;

class TournamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = new Tournament;
        $a->id = 1;
        $a->name = 'IEM Katowice 2020';
        $a->location = 'Katowice, Poland';
        $a->save();
        $a->teams()->attach(1);
    }
}




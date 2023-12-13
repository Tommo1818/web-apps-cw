<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sponsor;

class SponsorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = new Sponsor;
        $a->id = 1;
        $a->name = 'Logitech';
        $a->save();

        $b = new Sponsor;
        $b->id = 0;
        $b->name = 'None';
        $b->save();
    }
}




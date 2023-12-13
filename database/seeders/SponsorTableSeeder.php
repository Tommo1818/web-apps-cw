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
        $a->team_id = 1;
        $a->save();

        $b = new Sponsor;
        $b->id = 2;
        $b->name = 'Intel';
        $b->team_id = 2;
        $b->save();

        $c = new Sponsor;
        $c->id = 3;
        $c->name = 'Nvidia';
        $c->team_id = null;
        $c->save();

        $d = new Sponsor;
        $d->id = 4;
        $d->name = 'AMD';
        $d->team_id = null;
        $d->save();

        $e = new Sponsor;
        $e->id = 5;
        $e->name = 'Corsair';
        $e->team_id = null;
        $e->save();

    }
}




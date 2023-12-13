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

        $b = new Team;
        $b->id = 2;
        $b->name = 'Astralis';
        $b->country = 'Denmark';
        $b->sponsor_id = 1;
        $b->save();

        $c = new Team;
        $c->id = 3;
        $c->name = 'G2';
        $c->country = 'France';
        $c->sponsor_id = 1;
        $c->save();

        $d = new Team;
        $d->id = 4;
        $d->name = 'Vitality';
        $d->country = 'France';
        $d->sponsor_id = 1;
        $d->save();

        $e = new Team;
        $e->id = 5;
        $e->name = 'Liquid';
        $e->country = 'USA';
        $e->sponsor_id = 1;
        $e->save();

        $f = new Team;
        $f->id = 6;
        $f->name = 'Faze';
        $f->country = 'USA';
        $f->sponsor_id = 1;
        $f->save();

        $g = new Team;
        $g->id = 7;
        $g->name = 'Fnatic';
        $g->country = 'Sweden';
        $g->sponsor_id = 1;
        $g->save();
        
    }
}


<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = new Player;
        $a->id = 1;
        $a->in_game_name = 's1mple';
        $a->date_of_birth = '1997-10-02';
        $a->team_id = 1;
        $a->country = 'Ukraine';
        $a->save();

        $b = new Player;
        $b->id = 2;
        $b->in_game_name = 'elektronic';
        $b->date_of_birth = '1998-09-02';
        $b->team_id = 1;
        $b->country = 'Ukraine';
        $b->save();

        $c = new Player;
        $c->id = 3;
        $c->in_game_name = 'flamie';
        $c->date_of_birth = '1997-04-05';
        $c->team_id = 1;
        $c->country = 'Ukraine';
        $c->save();

        $d = new Player;
        $d->id = 4;
        $d->in_game_name = 'Boombl4';
        $d->date_of_birth = '1998-01-20';
        $d->team_id = 1;
        $d->country = 'Ukraine';
        $d->save();

        $e = new Player;
        $e->id = 5;
        $e->in_game_name = 'Perfecto';
        $e->date_of_birth = '2000-01-01';
        $e->team_id = 1;
        $e->country = 'Ukraine';
        $e->save();

        $f = new Player;
        $f->id = 6;
        $f->in_game_name = 'bl4de';
        $f->date_of_birth = '1997-01-01';
        $f->team_id = 1;
        $f->country = 'Ukraine';
        $f->save();

        Player::factory()->count(10)->create();
    }
}



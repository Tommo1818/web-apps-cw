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
        $a = new Player;
        $a->player_id = 1;
        $a->in_game_name = 's1mple';
        $a->date_of_birth = '1997-10-02';
        $a->roles = 'AWP, Rifler';
        $a->team_id = 1;
        $a->country = 'Ukraine';
        $a->follower_id = \App\Models\Follower::inRandomOrder()->first()->id;
        $a->save();

        $b = new Player;
        $b->player_id = 2;
        $b->in_game_name = 'elektronic';
        $b->date_of_birth = '1998-09-02';
        $b->roles = 'Rifler';
        $b->team_id = 1;
        $b->country = 'Ukraine';
        $b->follower_id = \App\Models\Follower::inRandomOrder()->first()->id;
        $b->save();

        $c = new Player;
        $c->player_id = 3;
        $c->in_game_name = 'flamie';
        $c->date_of_birth = '1997-04-05';
        $c->roles = 'Rifler';
        $c->team_id = 1;
        $c->country = 'Ukraine';
        $c->follower_id = \App\Models\Follower::inRandomOrder()->first()->id;
        $c->save();

        $d = new Player;
        $d->player_id = 4;
        $d->in_game_name = 'Boombl4';
        $d->date_of_birth = '1998-01-20';
        $d->roles = 'IGL, Rifler';
        $d->team_id = 1;
        $d->country = 'Ukraine';
        $d->follower_id = \App\Models\Follower::inRandomOrder()->first()->id;
        $d->save();

        $e = new Player;
        $e->player_id = 5;
        $e->in_game_name = 'Perfecto';
        $e->date_of_birth = '2000-01-01';
        $e->roles = 'Rifler';
        $e->team_id = 1;
        $e->country = 'Ukraine';
        $e->follower_id = \App\Models\Follower::inRandomOrder()->first()->id;
        $e->save();

        $f = new Player;
        $f->player_id = 6;
        $f->in_game_name = 'bl4de';
        $f->date_of_birth = '1997-01-01';
        $f->roles = 'Coach';
        $f->team_id = 1;
        $f->country = 'Ukraine';
        $f->follower_id = \App\Models\Follower::inRandomOrder()->first()->id;
        $f->save();
    }
}

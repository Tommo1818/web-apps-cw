<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $a = new User;
        $a->id = 1;
        $a->name = 'John';
        $a->email = 'hello@example.com';
        $a->password = Hash::make('example1');
        $a->role = 'admin';
        $a->save();

        $b = new User;
        $b->id = 2;
        $b->name = 'Jane';
        $b->email = 'bye@example.com';
        $b->password = Hash::make('example1');
        $b->role = 'user';
        $b->save();
    }
}

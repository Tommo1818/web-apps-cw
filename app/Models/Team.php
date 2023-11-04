<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public function players()
    {
        return $this->belongsToMany(Player::class);
    }
    public function sponsor()
    {
        return $this->hasOne(Sponsor::class);
    }
    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class);
    }
}

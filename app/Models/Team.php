<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public function players()
    {
        return $this->hasMany(Player::class);
    }
    public function sponsor()
    {
        return $this->belongsTo(Sponsor::class);
    }
    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class);
    }
}



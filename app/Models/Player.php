<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
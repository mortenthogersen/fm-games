<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $guarded = [];

    use HasFactory;
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
    public function downloads()
    {
        return $this->hasMany(Download::class);
    }
    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }
}

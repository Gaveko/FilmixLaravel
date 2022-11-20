<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Ganre;

class Film extends Model
{
    use HasFactory;

    public function ganres()
    {
        return $this->belongsToMany(Ganre::class, 'films_ganres', 'ganre_id', 'film_id');
    }
}

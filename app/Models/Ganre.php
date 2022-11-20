<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Film;

class Ganre extends Model
{
    public function films()
    {
        return $this->belongsToMany(Film::class, 'films_ganres', 'film_id', 'ganre_id');
    }
}

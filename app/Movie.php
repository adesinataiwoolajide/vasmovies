<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $fillable = [
        'movie_title', 'movie_category', 'movie_banner', 'cinema_id', 'top_actors', 'description',
    ];

    
}

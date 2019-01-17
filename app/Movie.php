<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
     protected $primaryKey = 'id';

    protected $fillable = [
        'movie_title', 'movie_category', 'movie_banner', 'cinema_id', 'top_actors', 'description',
    ];

   public function showtimes()
    {
        return $this->hasMany(Showtime::class);
    }

    public function cinemas()
    {
        return $this->belongsTo("App\Cinema");
    }


}

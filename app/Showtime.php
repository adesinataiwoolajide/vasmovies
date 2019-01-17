<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
     protected $table = 'show_times';

    protected $fillable = [
        'movie_id', 'showing_time', 'showing_date', 'cinema_id',
    ];

    public function movies()
    {
        return $this->belongsTo("App\Movie", 'cinema_id');
    }

    public function cinemas()
    {
        return $this->hasMany("App\Cinema");
    }
}

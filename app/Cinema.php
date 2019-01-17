<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $table = 'cinemas';
    protected $fillable = [
        'cinema_name', 'cinema_location',
    ];
     protected $primaryKey = 'id';

    public function movies()
    {
        return $this->hasMany("App\Movie", 'cinema_id');
    }

	public function showtimes()
    {
        return $this->hasMany(Showtime::class);
    }


    
}

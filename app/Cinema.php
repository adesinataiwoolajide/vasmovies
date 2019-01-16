<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $table = 'cinemas';
    protected $fillable = [
        'cinema_name', 'cinema_location',
    ];
     //protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo("App\User");
    }

    
}

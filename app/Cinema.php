<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $table = 'cinemas';
    protected $fillable = [
        'cinema_name', 'cinema_location',
    ];

}

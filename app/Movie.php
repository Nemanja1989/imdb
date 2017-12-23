<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends \Eloquent
{
    protected   $guarded = ['id'];

    public static function getAllMovies(){
        return self::get();
    }

}

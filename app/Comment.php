<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends \Eloquent
{
    protected $guarded = ['id'];

    public static function getComment($id){
        return self::where('movie_id',$id)->orderBy('created_at', 'DESC')->get();
    }
}

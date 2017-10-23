<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table
    public  $table='post';
    //primary key
    public $primaryKey='id';
    //timestamps
    public  $timestamps=true;

    public function  user()
    {
        return $this->belongsTo('App\User');
    }

}



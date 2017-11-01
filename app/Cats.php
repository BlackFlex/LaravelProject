<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cats extends Model
{
    public  $table='productcategory';
    //primary key
    public $primaryKey='id';
    //timestamps
    public  $timestamps=true;

    public function  prod()
    {
        return $this->hasMany('App\Products','id');
    }

}



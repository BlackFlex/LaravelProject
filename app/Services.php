<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //Table
    public  $table='services';
    //primary key
    public $primaryKey='id';
    //timestamps

    public function  category()
    {
        return $this->belongsTo('App\ServiceCategory');
    }


}

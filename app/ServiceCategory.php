<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    //Table
    public  $table='service_categories';
    //primary key
    public $primaryKey='id';
    //timestamps
    public  $timestamps=true;


    public function  service()
    {
        return $this->hasMany('App\Services');
    }

}

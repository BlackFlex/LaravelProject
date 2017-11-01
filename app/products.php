<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public  $table='products';
    //primary key
    public $primaryKey='id';
    //timestamps
    public  $timestamps=true;

    public function  cat()
    {
        return $this->belongsTo('App\Cats','cat_id');

    }
}

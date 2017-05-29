<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyers extends Model
{
    //
    protected $fillable = [
        'name',
        'area',
        'address',
        'district',
        'price',
        'description'
    ];

    public function FlyerPhotos(){
        return $this->hasMany('App\FlyerPhotos');
    }
}

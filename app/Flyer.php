<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
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

    public static function locatedAt($area, $address){
        $address = str_replace('-',' ', $address);
        
        return static::where(compact('area','address'))->first();
    }

    public function addPhoto(Photo $photo){
        return $this->photo()->save($photo);
    }

    public function getPriceAttribute($price){
        return 'UGX ' . number_format($price);
    }

    public function Photo(){
        return $this->hasMany('App\Photo');
    }
}

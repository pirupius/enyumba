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

    public function scopeLocatedAt($query, $area, $address){
        $address = str_replace('-',' ', $address);
        
        return $query->where(compact('area','address'));
    }

    public function getPriceAttribute($price){
        return 'UGX ' . number_format($price);
    }

    public function FlyerPhotos(){
        return $this->hasMany('App\FlyerPhotos');
    }
}

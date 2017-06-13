<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    //
    protected $fillable = [
        'user_id',
        'name',
        'area',
        'address',
        'district',
        'price',
        'description'
    ];

    public static function locatedAt($area, $address){
        $address = str_replace('-',' ', $address);
        
        return static::where(compact('area','address'))->firstOrFail();
    }

    public function addPhoto(Photo $photo){
        return $this->photo()->save($photo);
    }

    public function getPriceAttribute($price){
        return 'UGX ' . number_format($price);
    }

    public function photo(){
        return $this->hasMany('App\Photo');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function owner(){
        return $this->belongsTo('App\User');
    }

    public function ownedBy(User $user){
        return $this->user_id == $user->id;
    }
    
}

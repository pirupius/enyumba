<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'area',
        'address',
        'district',
        'price',
        'description'
    ];

    public static function locatedAt($area, $address)
    {
        $address = str_replace('-', ' ', $address);

        return static::where(compact('area', 'address'))->firstOrFail();
    }

    public function addPhoto(Photo $photo)
    {
        return $this->photo()->save($photo);
    }

    public function getPriceAttribute($price)
    {
        return 'UGX ' . number_format($price);
    }

    public function photo()
    {
        return $this->hasMany(Photo::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function ownedBy(User $user)
    {
        return $this->user_id == $user->id;
    }
}

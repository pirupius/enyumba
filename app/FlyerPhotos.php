<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlyerPhotos extends Model
{
    protected $table = 'flyer_photos';
    protected $fillable = ['path'];
    /**
     * A photo belongs to a flyer.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function flyers()
    {
        return $this->belongsTo('App\Flyers');
    }
}

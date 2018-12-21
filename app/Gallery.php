<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App \{
    Property
};

class Gallery extends Model
{
    protected $fillable = [
        'id', 'id_image', 'url', 'description', 'position'
    ];
    public function Property()
    {
        return $this->belongsTo(Property::class, 'gallery_id');
    }
}

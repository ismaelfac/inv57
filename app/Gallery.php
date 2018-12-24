<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ModelsProperties \{
    Property
};

class Gallery extends Model
{
    protected $fillable = [
        'gallery_wasi_id', 'id_image', 'url', 'description', 'position', 'property_id'
    ];
    public function Property()
    {
        return $this->belongsTo(Property::class, 'gallery_id');
    }
}

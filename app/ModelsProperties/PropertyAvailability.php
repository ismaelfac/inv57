<?php

namespace App\ModelsProperties;

use Illuminate\Database\Eloquent\Model;

class PropertyAvailability extends Model
{
    protected $table = 'property_availabilities';
    protected $fillable = ['it_represents', 'label'];
    public $timestamps = false;

    public function property()
    {
        return $this->hasMany(Property::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;

class PropertyType extends Model
{
    protected $table = "type_properties";
    protected $fillable = ['name', 'slug'];

    public function property()
    {
        return $this->belongsTo(Property::class, 'properties', 'property_type_id');
    }
}

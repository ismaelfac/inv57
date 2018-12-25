<?php

namespace App\ModelsProperties;

use Illuminate\Database\Eloquent\Model;
use App\Property;

class PropertyType extends Model
{
    protected $table = "type_properties";
    protected $fillable = ['name', 'id_property_type'];
    public $timestamps = false;

    public function property()
    {
        return $this->belongsTo(Property::class, 'properties', 'property_type_id');
    }
    public static function getPropertyTypeAttribute($id_property_type)
    {
        $result = PropertyType::select('id')->where('id_property_type', $id_property_type)->get();
        $data = $result->toJson();
        $data = json_decode($data);
        return $data[0]->id;
    }
}

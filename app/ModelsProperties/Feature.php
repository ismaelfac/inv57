<?php

namespace App\ModelsProperties;

use App\ModelsProperties\Property;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = ['name', 'int_ext'];
    public $timestamps = false;
    protected $casts = [
        'int_ext' => 'boolean'
    ];
    public function properties()
    {
        return $this->belongsToMany(Property::class)->using(FeatureProperty::class);
    }

}

<?php

namespace App\Modelsgenerals;

use App\Modelsgenerals \{
    Location, Neighborhood, Municipality
};
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['description', 'short_name', 'municipality_id'];
    public $timestamps = false;

    public function property()
    {
        return $this->hasMany(Property::class);
    }
    public function beighborhoods()
    {
        return $this->hasMany(Neighborhood::class);
    }
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }

    public static function getFindLocationByMunicipalityAttribute($municipality)
    {
        $result_id = Location::select('id')->where('municipality_id', $municipality)->get();
        $result_id = $result_id->toJson();
        $data = json_decode($result_id);
        return $data[0]->id;
    }
    public static function getLocationforAttribute(String $municipalityWasi)
    {
        $municipality = Municipality::getMunicipalityAttribute($municipalityWasi);
        $location = Location::getFindLocationByMunicipalityAttribute($municipality);
        return ($location ? : 1);
    }

    public function getUrlAttribute()
    {
        return route('municipality.show', $this->id);
    }

}

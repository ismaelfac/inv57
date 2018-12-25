<?php

namespace App\Modelsgenerals;

use App\Modelsgenerals \{
    Location, Neighborhood, Municipality
};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

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

    public static function getFindLocationByNeighborhoodAttribute($neighborhood)
    {
        $result_id = Location::select('id')->where('id', $neighborhood)->get();
        $result_id = $result_id->toJson();
        $data = json_decode($result_id);
        return $data[0]->id;
    }
    public static function getLocationforAttribute(String $zone_label)
    {
        $location = Neighborhood::select('location_id')->where('description', 'LIKE', $zone_label . '%')->get();
        $data = $location->toJson();
        $data = json_decode($data);
        $result = $data[0]->location_id;
        return ($result ? : 0);
    }

    public function getUrlAttribute()
    {
        return route('municipality.show', $this->id);
    }

}

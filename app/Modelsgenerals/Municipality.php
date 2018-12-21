<?php
use App\Modelsgenerals \{
    Departament, Municipality, Location
};

namespace App\Modelsgenerals;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    //
    protected $fillable = ['description', 'departament_id'];
    public $timestamps = false;

    public function departament()
    {
        return $this->belongsTo(Departament::class);
    }
    public function locations()
    {
        return $this->hasMany(Location::class);
    }
    public function getUrlAttribute()
    {
        return route('municipality.show', $this->id);
    }
    public static function getMunicipalityWasiAttribute(String $municipalityWasi)
    {
        $municipality = Municipality::select('id')->where('description', strtoupper($municipalityWasi))->get();
        $data = $municipality->toJson();
        $data = json_decode($data);
        return $data[0]->id;
    }

}
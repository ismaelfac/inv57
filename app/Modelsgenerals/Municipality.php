<?php

namespace App\Modelsgenerals;

use App\Modelsgenerals \{
    Departament, Municipality, Location
};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

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
    public static function getMunicipalityAttribute(string $municipality)
    {
        try {
            $municipality = Municipality::select('id')->where('description', strtoupper($municipality))->get();
            $data = $municipality->toJson();
            $data = json_decode($data);
            return $data[0]->id;
        } catch (Exception $e) {
            Log::warning('Error al recibir el Municipio de wasi');
        }
    }

}
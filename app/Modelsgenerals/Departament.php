<?php

namespace App\Modelsgenerals;

use App\Modelsgenerals \{
    Country, Municipality
};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Departament extends Model
{
    //
    protected $fillable = ['description', 'short_name', 'country_id'];
    public $timestamps = false;

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function municipalities()
    {
        return $this->hasMany(Municipality::class);
    }
    public static function getDepartamentAttribute(string $departament)
    {
        try {
            $result = Departament::select('id')->where('description', strtoupper($departament))->get();
            $data = $result->toJson();
            $data = json_decode($data);
            return $data[0]->id;
        } catch (Exception $e) {
            Log::warning('Error al recibir el Departamento de wasi');
        }
    }
}
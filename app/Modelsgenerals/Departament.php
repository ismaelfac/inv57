<?php

namespace App\Modelsgenerals;
use App\Modelsgenerals\{ Country, Municipality };
use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    //
    protected $fillable = ['description', 'short_name', 'country_id'];
    public $timestamps = false;
    
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function municipalities(){
        return $this->hasMany(Municipality::class);
    }
    public static function getDepartamentWasiAttribute(String $departamentWasi)
    {
        $departament = Departament::select('id')->where('description',strtoupper($departamentWasi))->get();
        $data = $departament->toJson();
        $data = json_decode($data);
        return $data[0]->id;
    }
}
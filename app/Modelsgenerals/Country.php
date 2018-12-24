<?php

namespace App\Modelsgenerals;

use Illuminate\Database\Eloquent\Model;
use App\Modelsgenerals \{
    Departament
};
use App\Client;

class Country extends Model
{
    //
    protected $fillable = ['code', 'description', 'nationality', 'short_name'];
    public $timestamps = false;
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
    public function departaments()
    {
        return $this->hasMany(Departament::class);
    }
    public static function getCountryAtributte(string $country)
    {
        try {
            $country = Country::select('id')->where('description', $country)->get();
            return json_decode($country[0]['id']);
        } catch (Exception $e) {
            Log::warning('Error al recibir el pais de wasi');
        }
    }

}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;
use App\Modelsgenerals\{ Country, Departament, Identification, Location, Municipality, Neighborhood };
use Carbon\Carbon as Carbon;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = ['first_name', 'last_name', 'slug', 'dni', 'type_dni', 'phone', 'landline', 'email', 'address', 'country_id', 'departament_id', 'municipality_id', 'location_id', 'neighborhood_id', 'latitude', 'longitude', 'birthdate', 'active'];
    protected $casts = [
        'active' => 'boolean'
    ];
    public $incrementing = false;
    
    public function properties()  { return $this->hasMany(Property::class); }
    public function country()     { return $this->belongsTo(Country::class); }
    public function departament() { return $this->belongsTo(Departament::class); }
    public function location()    { return $this->belongsTo(Location::class); }
    public function neighborhood(){ return $this->belongsTo(Neighborhood::class); }
    public function identification() { return $this->belongsTo(Identification::class, 'type_dni'); }
    //public function getCreatedAtAttribute($date) { return Carbon::createFromFormat('Ymd H:i:s', $date)->format('Ym-d'); } 
    //public function getUpdatedAtAttribute($date) { return Carbon::createFromFormat('Ymd H:i:s', $date)->format('Ym-d'); } 
    public static function getClientsAttribute()
    {   
        $list = array();
        $clients = CLient::all();
        foreach ($clients as $client) {
            $list = array_add($list,'id', $client->id);
            $list = array_add($list,'full_name', $client->last_name.' '.$client->first_name);
            $list = array_add($list,'type_dni', $client->identification->description);
            $list = array_add($list,'dni', $client->dni);
            $list = array_add($list,'phone', $client->phone);
            $list = array_add($list,'landline', $client->landline);
            $list = array_add($list,'email', $client->email);
            $list = array_add($list,'country_id', $client->country_id);
            $list = array_add($list,'country_name', $client->country->description);
            $list = array_add($list,'departament_id', $client->departament_id);
            $list = array_add($list,'departament_name', $client->departament->description);
            $list = array_add($list,'location_id', $client->location_id);
            $list = array_add($list,'location_name', $client->location->description);
            $list = array_add($list,'neighborhood_id', $client->neighborhood_id);
            $list = array_add($list,'neighborhood_name', $client->neighborhood->description);
            $list = array_add($list,'latitude', $client->latitude);
            $list = array_add($list,'longitude', $client->longitude);
            $list = array_add($list,'birthdate', $client->birthdate);
            $list = array_add($list,'active', ($client->active)?'activo':'inactivo');
            $list = array_add($list,'created_at', $client->created_at);
            $list = array_add($list,'updated_at', $client->updated_at);
        }

        return $list;    
    }



}

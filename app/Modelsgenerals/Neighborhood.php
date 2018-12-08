<?php

namespace App\Modelsgenerals;
use App\Modelsgenerals\{ Location };
use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    //
    protected $fillable = ['description', 'id_location'];
    public $timestamps = false;

   
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public static function getNeighborhoodforWasiAttribute(String $neighborhoodWasi = null, Int $neighborhood_id = null)
    {   if($neighborhood_id <> null){
            $neighborhood = Neighborhood::select('description')->where('id',$neighborhood_id)->get();
            $data = $neighborhood->toJson();
            $data = json_decode($data);
            return $data[0]->description;
        }elseif($neighborhoodWasi <> null){
            $neighborhood = Neighborhood::select('id')->where('description','LIKE','%'.$neighborhoodWasi.'%')->get();
             $data = $neighborhood->toJson();
             $data = json_decode($data);
             $lenght = sizeof($data);
             ($lenght > 1) ? rand($data[0]->id,$data[$lenght]->id) : $data[0]->id;
             dd($data);
             return array('neighborhood_id' => $data);
        }else{
            return null;
        }
    }
    
}
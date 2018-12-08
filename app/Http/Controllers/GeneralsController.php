<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelsgenerals\{ Civilstatus, Country, Departament, Municipality, Location, Neighborhood, Identification };
class GeneralsController extends Controller
{
    public function getCivilStatus()
    {
        $civilStatus = Civilstatus::all();
        return response()->json($civilStatus);
    }
    public function getCountry()
    {
        $country = Country::all();
        return response()->json($country);
    }
    public function getDepartament($country)
    {
        $departaments = Departament::where('country_id',$country)->get();
        return response()->json($departaments);
    }
    public function getMunicipality($departament)
    {
        $municipalities = Municilaty::where('departament_id',$departament)->get();
        return response()->json($municipalities);
    }
    public function getLocation($municipality)
    {
        $locations = Location::where('municipality_id',$municipality)->get();
        return response()->json($locations);
    }
    public function getNeighborhood($location)
    {
        $neighborhood = Neighborhood::where('location_id',$location)->get();
        return response()->json($neighborhood);
    }
    public function getIdentification()
    {
        $identifications = Identification::all();
        return response()->json($identifications);
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\PropertiesRequest;
use App\ModelsProperties \{
    Property, PropertyType, Feature, SocialStratum
};
use App\Modelsgenerals \{
    Country, Departament, Municipality, Location, Neighborhood
};
use App \{
    Gallery
};
use App\Http\Controllers\PropertiesWasiController;

class PropertyController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        $properties = Property::getPropertiesAttribute();
        //dd($properties);
        return view('admin2.modules.properties.index', compact('properties'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propertiesType = PropertyType::all();
        $features_int = Feature::where('int_ext', '1')->get();
        $features_ext = Feature::where('int_ext', '0')->get();
        $countries = Country::all();
        $galleries = Gallery::where('property_id', '1')->get();
        return view('admin2.modules.properties.create', compact('propertiesType', 'features_int', 'features_ext', 'departaments', 'countries', 'galleries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Property $Property)
    {
        dd($request->all());
        $property = Property::create($request->all());
        return redirect()->route('properties.edit', $property->id)->with('info', 'Usuario Guardado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        $roles_unique = ($property->isAdministrador() ? $this->getRoles_inv() : Role::find($property));
        //dd($roles_unique);
        return view('admin2.modules.properties.show', compact('user', 'roles_unique', 'roles_personalized'));
    }
    public function getRoles_inv()
    {
        return Role::where('special', 'all-access')->orWhere('special', 'no-access')->get();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        $propertiesType = PropertyType::all();
        $features_int = Feature::where('int_ext', '1')->get();
        $features_ext = Feature::where('int_ext', '0')->get();
        $countries = Country::all();
        $social_stratum = SocialStratum::all();
        $property = Property::getPropertiesAttribute($property->id);
        $property = $property[0];
        //dd($property);
        return view('admin2.modules.properties.edit', compact('property', 'propertiesType', 'features_ext', 'features_int', 'countries', 'social_stratum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        dd($request->all());
        $property->update($request->all()); //update user
        $property->features()->sync($request->get('features_int', 'features_ext')); //update caracteristicas
        //$property->PropertiesWasiController::setPropertyWasi($property); //guardar propiedad en Wasi
        return redirect()->route('properties.index', $property)->with('info', 'Usuario Actualizado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        if ($client->active) {
            $client->update(['active' => false]);
            return back()->with('info', 'Cliente Desactivado Correctamente');
        } else {
            $client->update(['active' => true]);
            return back()->with('info', 'Cliente Activado Correctamente');
        }
    }
}

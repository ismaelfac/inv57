<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PropertiesRequest;
use App\Property;
use App\PropertyType;

class PropertyController extends Controller
{
    public function __construct()
    {

    }
    public function getProperties()
    {
        $properties = Property::getPropertiesAttribute();
        return response()->json($properties);
    }
    public function searchProperties($property_id)
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
        return view('admin2.modules.properties.create', compact('propertiesType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Property $property)
    {
        $property = Property::create($request::all());
        $property->roles()->sync($request->get('roles')); //update roles
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
        $roles_unique = ($property->isAdministrador() ? $this->getRoles_inv() : Role::find($property));
        $roles_personalized = Role::where('special', null)->paginate(5);
        return view('admin2.modules.properties.edit', compact('user', 'roles_unique', 'roles_personalized'));
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
        $property->update($request->all()); //update user
        $client->roles()->sync($request->get('roles')); //update roles
        return redirect()->route('properties.index', $client->id)->with('info', 'Usuario Actualizado con Exito');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App \{
    Property, Client
};

class OwnerPropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin2.modules.owner.index', compact('ownerProperty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $property)
    {
        dd($request->all());
        $OwnerProperty = Property::findOrFail($property);
        $OwnerProperty->clients()->attach($property);
        return redirect()->route('ownerproperties.edit', $OwnerProperty)->with('info', 'Imagen Guardado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Property $property
     * @return \Illuminate\Http\Response
     */
    public function show($property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $property
     * @return \Illuminate\Http\Response
     */
    public function edit($property)
    {
        //
        dd('edit' . $property);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy($property)
    {
        //
    }
}

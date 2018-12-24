<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Caffeinated\Shinobi\Models\Role;
use App\Client;

class ClientController extends Controller
{
    public function __construct()
    {

    }
    public function getClients()
    {
        $clients = Client::getClientsAttribute('web');
        return response()->json($clients);
    }

    public function index()
    {
        //$clients = Client::orderBy('updated_at', 'DESC')->paginate(3);
        $clients = Client::getClientsAttribute('web');
        //dd($clients);
        return view('admin2.modules.clients.index', compact('clients'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin2.modules.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Client $client)
    {
        $client = Client::create($request::all());
        $client->roles()->sync($request->get('roles')); //update roles
        return redirect()->route('clients.edit', $client->id)->with('info', 'Usuario Guardado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('admin2.modules.clients.show', compact('client'));
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
    public function edit(Client $client)
    {
        $roles_unique = ($client->isAdministrador() ? $this->getRoles_inv() : Role::find($client));
        $roles_personalized = Role::where('special', null)->paginate(5);
        return view('admin2.modules.clients.edit', compact('user', 'roles_unique', 'roles_personalized'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client->update($request->all()); //update user
        $client->roles()->sync($request->get('roles')); //update roles
        return redirect()->route('clients.index', $client->id)->with('info', 'Usuario Actualizado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
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

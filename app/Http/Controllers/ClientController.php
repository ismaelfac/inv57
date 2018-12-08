<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Caffeinated\Shinobi\Models\Role;
use App\Client as Client;

class ClientController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        if(Auth::user())
        {
            return view('modules.clients');

        }else{
            return redirect('/home');
        }

    }

    public function getClients($per_page)
    {
        $clients = Client::getClientsAttribute();
        dd($clients);
        return response()->json($clients);

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
    public function store(Request $request)
    {
        //dd('Store Entro');
        $client = new Client;
        //dd($request->all());
        $v = \Validator::make($request->all(), [
            
            'first_name' => 'required',
            'last_name' => 'required',
            'email'    => 'required|email|unique:clients',
            'type_dni' => 'required',
            'dni' => 'required'
        ]);
 
        if ($v->fails())
        {
            return response()->json($v->errors());
        }else{            
            dd('paso validacion, vamos vas bien! :)');
            $client->create($request->all());
            $clients = Client::all();
            return response()->json($clients);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd("entro al edit");
        $client = Client::findOrFail($id);
        //(!$client)? abort(404, 'Usuario no encontrado'): $client; 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

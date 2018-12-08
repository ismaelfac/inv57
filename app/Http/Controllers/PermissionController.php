<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $users = User::where('id','<>', 1)->where('id','<>', $id)->orderBy('created_at','DESC')->paginate(3);
        $title = "Listado de Usuarios";
        return view('admin2.modules.users.index',compact('users', 'title'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles_unique = Role::where('special','all-access')->orWhere('special','no-access')->get();
        $roles_personalized = Role::where('special',null)->paginate(5);
        return view('admin2.modules.users.create', compact('roles_unique','roles_personalized'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request::all());
        return redirect()->route('users.edit', $user->id)->with('info','Usuario Guardado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin2.modules.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles_unique = Role::where('special','all-access')->orWhere('special','no-access')->get();
        $roles_personalized = Role::where('special',null)->paginate(5);
        return view('admin2.modules.users.edit', compact('user', 'roles_unique','roles_personalized')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request::all()); //update user
        $user->roles()->sync($request->get('roles')); //update roles
        return redirect()->route('users.edit', $user->id)->with('info','Usuario Actualizado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->is_active){
             $user->update(['is_active' => false]);
             return back()->with('info','Usuario Desactivado Correctamente');
        }else{
            $user->update(['is_active' => true]);
             return back()->with('info','Usuario Activado Correctamente');
        } 
    }
}

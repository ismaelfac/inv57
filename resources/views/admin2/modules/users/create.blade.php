@extends('admin2.admin')
@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Crear Usuario
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            <a href="{{ route('users.index') }}" class="btn btn-outline-danger"> Cancelar</a>
        </div>
    </div>
    <div class="card-body text-secondary">
        {!! Form::open(['route' => ['users.store']]) !!}
           <div class="form-row">
                <div class="form-group col-md-6">
                <label class="sr-only" for="inlineFormInputGroupUsername2">Apellidos Completos</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">Apellidos Completos</div>
                        </div>
                        <input type="text" name="last_name" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Apellidos" value="{{ old('last_name') }}"> 
                    </div>
                </div>
                <div class="form-group col-md-6">
                <label class="sr-only" for="inlineFormInputGroupUsername2">Nombres Completos</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">Nombres Completos</div>
                        </div>
                        <input type="text" name="first_name" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Nombres" value="{{ old('first_name') }}"> 
                    </div>
                </div>
                <div class="form-group col-md-6">
                <label class="sr-only" for="inlineFormInputGroupUsername2">Email</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                        </div>
                        <input type="text" name="email" class="form-control" id="inlineFormInputGroupUsername2" value="{{ old('email') }}" placeholder="Email">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword2" class="sr-only">Password</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">Contraseña</div>
                        </div>
                        <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password" value="{{ old('password' )}}">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword2" class="sr-only">Estado del Usuario</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">Estado del Usuario</div>
                            <div class="form-check form-check-inline">
                                {!! Form::radio('is_active', '1', true) !!}<label class="form-check-label" for="exampleRadios1">
                                Activar
                            </label>
                            </div>
                            <div class="form-check form-check-inline">
                                {!! Form::radio('is_active', '0') !!}<label class="form-check-label" for="exampleRadios1">
                                Desactivar
                            </label>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card border-light mb-3">
                    <div class="card-header">Roles Personalizados</div>
                    <div class="card-body">
                        <div class="list-group">
                            @foreach ($roles_personalized as $role_personalized )
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><small>{!! Form::checkbox('roles_personalized[]', $role_personalized->id, null) !!}</small> {{ $role_personalized->name}}</h5>
                                <small><button href="{{ route('permissions.show', $role_personalized->id) }}" class="btn btn-outline-info btn-sm">Ver Permisos</button></small>
                                </div>
                                <p class="mb-1">({{ $role_personalized->description ?: 'N/A' }})</p>
                            </a>
                            @endforeach
                        </div><hr>
                        {{ $roles_personalized->render() }}
                    </div>
                    </div>
                </div>
            <button type="submit" class="btn btn-primary">Crear Nuevo Usuario</button>
        {!! Form::close() !!}
    </div>
    </div>
</div>
@endsection
@extends('admin2.admin')
@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Crear Rol
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            <a href="{{ route('roles.index') }}" class="btn btn-outline-danger"> Cancelar</a>
        </div>
    </div>
    <div class="card-body text-secondary">
        {!! Form::open(['route' => ['roles.store']]) !!}
           <div class="form-row">
                <div class="form-group col-md-6">
                <label class="sr-only" for="inlineFormInputGroupUsername2">Nombre</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">Nombre</div>
                        </div>
                        <input type="text" name="name" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Nombre" value="{{ old('name') }}"> 
                    </div>
                </div>
                <div class="form-group col-md-6">
                <label class="sr-only" for="inlineFormInputGroupUsername2">Detalle</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">Detalle</div>
                        </div>
                        <input type="text" name="description" class="form-control" id="inlineFormInputGroupUsername2" value="{{ old('description') }}" placeholder="Describa la función de este rol">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label for="inputPassword2" class="sr-only">Estado del Usuario</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">Roles Unicos </div>
                            <div class="form-check form-check-inline">
                                {{ Form::radio('special', 'all-access')}}<label class="form-check-label" for="exampleRadios1">
                                Acceso total
                            </label>
                            </div>
                            <div class="form-check form-check-inline">
                                {{ Form::radio('special', 'no-access')}}<label class="form-check-label" for="exampleRadios1">
                                Sin Acceso
                            </label>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card border-light mb-3">
                    <div class="card-header">Roles Unicos</div>
                    <div class="card-body">
                        <div class="list-group">
                            @foreach ($permissions as $permission )
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><small>{!! Form::checkbox('permissions[]', $permission->id, null) !!}</small> {{ $permission->name}}</h5>
                                <small>({{ $permission->description ?: 'N/A' }})</small>
                                </div>
                            </a>
                            @endforeach
                        </div><hr>
                        {{ $permissions->render() }}
                    </div>
                    </div>
                </div>
            <button type="submit" class="btn btn-primary">Crear Nuevo Rol</button>
        {!! Form::close() !!}
    </div>
    </div>
</div>
@endsection
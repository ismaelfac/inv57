@extends('admin2.admin')
@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Roles
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            <a href="{{ route('roles.index') }}" class="btn btn-outline-success"> Regresar</a>
            <a href="#" class="btn btn-outline-danger"> PDF</a>
        </div>
    </div>
    <div class="card-body text-secondary">
   {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'PUT']) !!}
        <div class="form-row">
            <div class="form-group col-md-6">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Nombre</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">Nombre</div>
                    </div>
                    <input type="text" name="name" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Nombre" value="{{ old('name',$role->name) }}">
                </div>
            </div>
            <div class="form-group col-md-6">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Detalle</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">Detalle </div>
                    </div>
                    <input type="text" name="description" class="form-control" id="inlineFormInputGroupUsername2" value="{{ old('description',$role->description) }}" placeholder="Describa la función de este rol">
                </div>
            </div>
        </div>
    </div>
     <div class="card">
        <div class="card border-light mb-3">
        <div class="card-header">Permisos Asignados</div>
        <div class="card-body">
            <div class="list-group">
                @foreach ($permissions as $permission )
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><small>{!! Form::checkbox('permissions[]', $permission->id, null) !!}</small> {{ $permission->name}}</h5></h5>
                    <small>({{ $permission->description ?: 'N/A' }})</small>
                    </div>
                </a>
                @endforeach
            </div>
            {{ $permissions->render() }}
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Rol</button>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
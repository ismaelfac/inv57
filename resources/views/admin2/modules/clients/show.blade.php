@extends('admin2.admin')
@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Crear Clientes
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            <a href="{{ route('clients.index') }}" class="btn btn-outline-success"> Regresar</a>
            <a href="#" class="btn btn-outline-danger"> PDF</a>
        </div>
    </div>
    <div class="card-body text-secondary">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Apellidos</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">Apellidos</div>
                    </div>
                    <p class="form-control">{{ $client->last_name }} </p>
                </div>
            </div>
            <div class="form-group col-md-6">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Nombres </label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">Nombres</div>
                    </div>
                    <p class="form-control">{{ $client->first_name }} </p>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label class="sr-only" for="inlineFormInputGroupUsername2">Email</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">Email </div>
                        </div>
                        <p class="form-control">{{ $client->email }}</p>
                    </div>
            </div>
            <div class="form-group col-md-6">
                <label class="sr-only" for="inlineFormInputGroupUsername2">Telefono</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">Telefono </div>
                        </div>
                        <p class="form-control">{{ $client->phone }}</p>
                    </div>
            </div>
        </div>
    </div>
     <div class="card">
        <div class="card border-light mb-3">
        <div class="card-header">Inmuebles Asignados</div>
        <div class="card-body">
            <div class="list-group">
               
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
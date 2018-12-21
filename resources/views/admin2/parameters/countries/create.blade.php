@extends('admin2.admin')
@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
        <div class="card-header">Crear Propiedades
            <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                <a href="{{ route('countries.index') }}" class="btn btn-outline-danger"> Cancelar</a>
            </div>
        </div>
        <div class="card-body text-secondary">
            {!! Form::open(['route' => ['countries.store']]) !!}
            <div class="form-row">
                    
                <button type="submit" class="btn btn-primary">Crear Nuevo Usuario</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
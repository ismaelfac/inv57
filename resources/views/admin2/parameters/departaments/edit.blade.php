@extends('admin2.admin')
@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Editar Departamento
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            <a href="{{ route('departaments.index') }}" class="btn btn-outline-success"> Regresar</a>
            <a href="#" class="btn btn-outline-danger"> PDF</a>
        </div>
    </div>
    <div class="card-body text-secondary">
    {!! Form::model($departament, ['route' => ['departaments.update', $departament->id], 'method' => 'PUT']) !!}
        <div class="form-row">
            <div class="form-group col-md-6">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Descripción</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">Descripción</div>
                    </div>
                    <input type="text" name="name" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Descripcion del departamento" value="{{ old('name',$departament->description) }}"> 
                </div>
            </div>
            <div class="form-group col-md-6">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Nombre Corto</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">Nombre Corto </div>
                    </div>
                    <input type="text" name="email" class="form-control" id="inlineFormInputGroupUsername2" value="{{ old('short_name',$departament->short_name) }}" placeholder="Nombre Corto">
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
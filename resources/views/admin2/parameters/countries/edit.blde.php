@extends('admin2.admin')
@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Editar Pais
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            <a href="{{ route('countries.index') }}" class="btn btn-outline-success"> Regresar</a>
            <a href="#" class="btn btn-outline-danger"> PDF</a>
        </div>
    </div>
    <div class="card-body text-secondary">
    {!! Form::model($user, ['route' => ['countries.update', $user->id], 'method' => 'PUT']) !!}
        <div class="form-row">
            <div class="form-group col-md-6">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Codigo</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">Codigo</div>
                    </div>
                    <input type="text" name="code" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Nombres" value="{{ old('code',$country->code) }}"> 
                </div>
            </div>
            <div class="form-group col-md-6">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Nombre</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">Nombre </div>
                    </div>
                    <input type="text" name="description" class="form-control" id="inlineFormInputGroupUsername2" value="{{ old('description',$country->code) }}" placeholder="Email">
                </div>
            </div>
             <div class="form-group col-md-6">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Nacionalidad</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">Nombre </div>
                    </div>
                    <input type="text" name="nacionality" class="form-control" id="inlineFormInputGroupUsername2" value="{{ old('nacionality',$country->nacionality) }}" placeholder="Email">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
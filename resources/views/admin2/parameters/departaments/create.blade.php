@extends('admin2.admin')
@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Crear Usuario
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            <a href="{{ route('departaments.index') }}" class="btn btn-outline-danger"> Cancelar</a>
        </div>
    </div>
    <div class="card-body text-secondary">
        {!! Form::open(['route' => ['departaments.store']]) !!}
           <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="sr-only" for="inlineFormInputGroupUsername2">Descripción</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">Descripción</div>
                        </div>
                        <input type="text" name="description" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Nombre del Departamento" value="{{ old('description') }}"> 
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="sr-only" for="inlineFormInputGroupUsername2">Nombre Corto</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">Nombre Corto</div>
                        </div>
                        <input type="text" name="short_name" class="form-control" id="inlineFormInputGroupUsername2" value="{{ old('short_name') }}" placeholder="Nombre Corto">
                    </div>
                </div>
                <div class="card">
                    <div class="card border-light mb-3">
                    <div class="card-header">Paises</div>
                    <div class="card-body">
                        <div class="list-group">
                            @foreach ($countries as $country )
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><small>{!! Form::radio('country_id', $country->id, null) !!}</small> {{ $country->description}}</h5></div>
                                <p class="mb-1">{{ $country->short_name }}</p>
                            </a>
                            @endforeach
                        </div><hr>
                        {{ $countries->render() }}
                    </div>
                    </div>
                </div>                
                
            </div>
            <button type="submit" class="btn btn-primary">Crear Nuevo Departamento</button>
        {!! Form::close() !!}
    </div>
    </div>
</div>
@endsection
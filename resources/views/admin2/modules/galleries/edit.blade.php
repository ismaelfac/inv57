@extends('admin2.admin')
@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Editar Galeria
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            <a href="{{ route('permissions.index') }}" class="btn btn-outline-danger"> Cancelar</a>
        </div>
    </div>
    <div class="card-body text-secondary">
        <ul class="list-group">
            {!! Form::model($gallery, ['route' => ['galleries.update', $gallery->id], 'method' => 'PUT']) !!}
                <li class="list-group-item">
                    <div class="input-group">
                        {!! Form::file('image', ['class' => 'form-control']) !!}
                    </div>     
                </li>
                <li class="list-group-item">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Descripción</span>
                        </div>
                        <input type="text" class="form-control" name="description" id="validationDefaultUsername" placeholder="Descripción Imagen" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Posición</span>
                        </div>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="position">
                            <option selected>Posición de la Imagen...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                </li>
                <li class="list-group-item">
                    <button type="submit" class="btn btn-outline-success btn-sm">Cargar Imagen</button>
                </li>
            {!! Form::close() !!}
        </ul>
    </div>
    </div>
</div>
@endsection
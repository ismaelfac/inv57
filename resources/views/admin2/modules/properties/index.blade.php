@extends('admin2.admin')

@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                <span class="input-group-btn">
                    @can('properties.create')
                    <a href="{{ route('properties.create') }}" class="btn btn-outline-success btn-sm" role="button">Registrar Propiedad</a>
                    @endcan
                </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                {!! Form::open(['route' => ['properties.index'], 'method' => 'GET', 'class' => '', 'role' => 'search']) !!}
                <div class="input-group input-group-sm">
                <input type="text" name="name" class="form-control " placeholder="Buscar...">
                <span class="input-group-btn">
                    <button class="btn btn-outline-info btn-sm" type="submit">Buscar!</button>
                </span>
                </div><!-- /input-group -->
                {!! Form::close() !!}
            </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div>    
    <div class="card-body text-secondary">
    {{ $properties->render() }}
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th width="10px">Codigo</th>
                    <th>Titulo</th>
                    <th>Tipo</th>
                    <th>Pais</th>
                    <th>Depar</th>
                    <th>Ciudad</th>
                    <th>Barrio</th>
                    <th>Dirección</th>
                    <th>Area</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
             <tbody>
                @foreach($properties as $property)
                <tr>
                    <td>{{ $property->id }}</td>
                    <td>{{ $property->title }}</td>
                    <td>{{ $property->PropertyType->name }}</td>
                    <td>{{ $property->country->short_name }}</td>
                    <td>{{ $property->departament->short_name }}</td>
                    <td>{{ $property->municipality->description }}</td>
                    <td>{{ $property->neighborhood->description }}</td>
                    <td>{{ $property->address }}</td>
                    <td>{{ $property->area }}</td>
                    <td>
                        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Acciones
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    @can('properties.show')
                                        <a href="{{ route('properties.show', $property->id) }}" class="dropdown-item">Ver</a>
                                    @endcan
                                    @can('properties.edit')
                                        <a href="{{ route('properties.edit', $property->id) }}" class="dropdown-item">Editar</a>
                                    @endcan
                                </div>
                                
                        </div>    
                    </td>                
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    </div>
</div>

@endsection

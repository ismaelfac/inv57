@extends('admin2.admin')

@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Paises
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                    @can('departaments.create')
                    <a href="{{ route('departaments.create') }}" class="btn btn-outline-success">Registrar Departamento</a>
                    @endcan
        </div>
    </div>
    <div class="card-body text-secondary">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th width="10px">ID</th>
                    <th>Nombre</th>
                    <th>Abrev</th>
                    <th>Pais</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
             <tbody>
                @foreach($departaments as $departament)
                <tr>
                    <td>{{ $departament->id }}</td>
                    <td>{{ $departament->description }}</td>
                    <td>{{ $departament->short_name }}</td>
                    <td>{{ $departament->country->short_name }}</td>
                    <td>
                        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                            @can('departaments.edit')
                                <a href="{{ route('departaments.edit', $departament->id) }}" class="btn btn-outline-warning">Editar</a>
                            @endcan
                            @can('departaments.destroy')
                                {!! Form::open(['route' => ['departaments.destroy', $departament->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-outline-danger">Eliminar</button>
                                {!! Form::close() !!}
                            </a>
                        @endcan
                        </div>    
                    </td>                
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $departaments->render() }}
    </div>
    </div>
</div>

@endsection
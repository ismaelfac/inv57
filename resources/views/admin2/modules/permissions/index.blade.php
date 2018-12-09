@extends('admin2.admin')

@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Permisos del Sistema
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                    @can('permissions.create')
                    <a href="{{ route('permissions.create') }}" class="btn btn-outline-success">Registrar Permiso</a>
                    @endcan
        </div>
    </div>
    <div class="card-body text-secondary">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th width="10px">ID</th>
                    <th>Nombre</th>
                    <th>Detalle</th>
                    <th>Actualizado</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
             <tbody>
                @foreach($permissions as $permission)
                <tr>
                    <td>{{ $permission->id }}</td>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->description }}</td>
                    <td>{{ $permission->updated_at }}</td>
                    <td>
                        <div class="btn-group btn-group-sm float-right" permission="group" aria-label="...">
                            @can('permission.show')
                                <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-outline-info">Ver</a>
                            @endcan
                            @can('permissions.edit')
                                <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-outline-warning">Editar</a>
                            @endcan
                            @can('permission.destroy')
                                {!! Form::open(['route' => ['permissions.destroy', $permission->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-outline-danger btn-sm">Eliminar</button>
                                {!! Form::close() !!}
                            @endcan
                        </div>    
                    </td>                
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $permissions->render() }}
    </div>
    </div>
</div>

@endsection


@extends('admin2.admin')

@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Roles
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                    @can('roles.create')
                    <a href="{{ route('roles.create') }}" class="btn btn-outline-success">Registrar Rol</a>
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
                @foreach($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->description }}</td>
                    <td>{{ $role->updated_at }}</td>
                    <td>
                        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                            @can('roles.show')
                                <a href="{{ route('roles.show', $role->id) }}" class="btn btn-outline-info">Ver</a>
                            @endcan
                            @can('roles.edit')
                                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-outline-warning">Editar</a>
                            @endcan
                            @can('roles.destroy')
                            {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'DELETE']) !!}
                                <button class="btn btn-outline-danger btn-sm">Eliminar</button>
                            {!! Form::close() !!}
                            @endcan
                        </div>    
                    </td>                
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $roles->render() }}
    </div>
    </div>
</div>

@endsection


@extends('admin2.admin')

@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header"><div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                <span class="input-group-btn">
                    @can('users.create')
                    <a href="{{ route('users.create') }}" class="btn btn-success btn-sm" role="button">Registrar Usuario</a>
                    @endcan
                </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                {!! Form::open(['route' => ['users.index'], 'method' => 'GET', 'class' => '', 'role' => 'search']) !!}
                <div class="input-group input-group-sm">
                <input type="text" name="name" class="form-control " placeholder="Buscar...">
                <span class="input-group-btn">
                    <button class="btn btn-info btn-sm" type="submit">Buscar!</button>
                </span>
                </div><!-- /input-group -->
                {!! Form::close() !!}
            </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div>    
    <div class="card-body text-secondary">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th width="10px">ID</th>
                    <th>Nombres Completos</th>
                    <th>email</th>
                    <th>Roles</th>
                    <th>Estado</th>
                    <th>Actualizado</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
             <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><ul class="list-group">
                        @foreach($user->roles as $role)
                        @can('roles.show')
                            <li class="list-group-item"><a href="#" class="btn btn-success btn-sm">{{ $role->name}}</a></li>
                        @endcan
                        @endforeach
                        
                        </ul>
                    </td>
                    <td>@can('users.destroy')
                            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
                                <button class="btn btn-outline-danger">{{ ($user->is_active)?'Desactivar':'Activar' }}</button>
                            {!! Form::close() !!}
                            </a>
                        @endcan
                    </td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                            @can('users.show')
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-info">Ver</a>
                            @endcan
                            @can('users.edit')
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-warning">Editar</a>
                            @endcan
                        </div>    
                    </td>                
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->render() }}
    </div>
    </div>
</div>

@endsection

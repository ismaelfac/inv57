@extends('admin2.admin')

@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Usuarios
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                    @can('users.create')
                    <a href="{{ route('users.create') }}" class="btn btn-outline-success">Registrar Usuario</a>
                    @endcan
        </div>
    </div>
    <div class="card-body text-secondary">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th width="10px">ID</th>
                    <th>Nombres Completos</th>
                    <th>email</th>
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

@section('script')
<script>
  $(function() {
    $('#toggle-event').change(function() {
      $('#console-event').html('Toggle: ' + $(this).prop('checked'))
    })
  })
</script>    
@stop
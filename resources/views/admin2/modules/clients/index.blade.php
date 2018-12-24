@extends('admin2.admin')

@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Clientes
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            @can('clients.create')
            <a href="{{ route('clients.create') }}" class="btn btn-outline-success">Registrar Cliente</a>
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
                @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->last_name }} {{ $client->first_name}}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->updated_at }}</td>
                    <td>
                        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                            @can('properties.index')
                                <a href="{{ route('properties.show', $client->id) }}" class="btn btn-outline-primary">Inmuebles</a>
                            @endcan
                            @can('clients.show')
                                <a href="{{ route('clients.show', $client->id) }}" class="btn btn-outline-info">Ver</a>
                            @endcan
                            @can('clients.edit')
                                <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-outline-warning">Editar</a>
                            @endcan
                            @can('users.create')
                                <a href="{{ route('users.create', $client->id) }}" class="btn btn-outline-info">Usuario</a>
                            @endcan
                        </div>    
                    </td>                
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $clients->render() }}
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
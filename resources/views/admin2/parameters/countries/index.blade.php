@extends('admin2.admin')

@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Paises
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                    @can('countries.create')
                    <a href="{{ route('countries.create') }}" class="btn btn-outline-success">Registrar Pais</a>
                    @endcan
        </div>
    </div>
    <div class="card-body text-secondary">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th width="10px">ID</th>
                    <th>Code</th>
                    <th>Nombre</th>
                    <th>Nacionalidad</th>
                    <th>Abrev</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
             <tbody>
                @foreach($countries as $country)
                <tr>
                    <td>{{ $country->id }}</td>
                    <td>{{ $country->code }}</td>
                    <td>{{ $country->description }}</td>
                    <td>{{ $country->nacionality }}</td>
                    <td>{{ $country->short_name }}</td>
                    <td>
                        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                            @can('countries.edit')
                                <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-outline-warning">Editar</a>
                            @endcan
                            @can('countries.destroy')
                                {!! Form::open(['route' => ['countries.destroy', $country->id], 'method' => 'DELETE']) !!}
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
        {{ $countries->render() }}
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
@extends('admin2.admin')
@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Editar Roles
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            <a href="{{ route('roles.index') }}" class="btn btn-outline-danger"> Cancelar</a>
        </div>
    </div>
    <div class="card-body text-secondary">
        {!! Form::model($user, ['route' => ['roles.update', $user->id], 'method' => 'PUT']) !!}
            <input type="text">
            <button type="submit" class="btn btn-primary">Actualizar Registro</button>
        {!! Form::close() !!}
    </div>
    </div>
</div>
@endsection
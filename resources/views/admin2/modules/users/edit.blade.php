@extends('admin2.admin')
@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Editar Usuarios
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            <a href="{{ route('users.index') }}" class="btn btn-outline-danger"> Cancelar</a>
        </div>
    </div>
    <div class="card-body text-secondary">
        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
            @include('admin2.modules.users.form')
            <button type="submit" class="btn btn-primary">Actualizar Registro</button>
        {!! Form::close() !!}
    </div>
    </div>
</div>
@endsection
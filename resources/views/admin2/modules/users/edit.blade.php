@extends('admin2.admin')
@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Editar Usuario
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            <a href="{{ route('users.index') }}" class="btn btn-outline-success"> Regresar</a>
            <a href="#" class="btn btn-outline-danger"> PDF</a>
        </div>
    </div>
    <div class="card-body text-secondary">
    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
        <div class="form-row">
            <div class="form-group col-md-6">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Nombres Completos</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">Nombres Completos</div>
                    </div>
                    <input type="text" name="name" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Nombres" value="{{ old('name',$user->name) }}"> 
                </div>
            </div>
            <div class="form-group col-md-6">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Email</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">Email </div>
                    </div>
                    <input type="text" name="email" class="form-control" id="inlineFormInputGroupUsername2" value="{{ old('email',$user->email) }}" placeholder="Email">
                </div>
            </div>
        </div>
    </div>
     <div class="card">
        <div class="card border-light mb-3">
        <div class="card-header">Roles Asignados</div>
        <div class="card-body">
            <div class="list-group">
                @foreach ($roles_unique as $role_unique )
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"> {{ $role_unique->name}}</h5>
                    <small>{{ $role_unique->special }}</small>
                    </div>
                    <p class="mb-1">({{ $role_unique->description ?: 'N/A' }})</p>
                </a>
                @endforeach
            </div><hr>
        <button type="submit" class="btn btn-primary">Editar Usuario</button>
        </div>
         
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
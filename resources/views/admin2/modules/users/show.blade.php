@extends('admin2.admin')
@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Usuarios
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            <a href="{{ route('users.index') }}" class="btn btn-outline-success"> Regresar</a>
            <a href="#" class="btn btn-outline-danger"> PDF</a>
        </div>
    </div>
    <div class="card-body text-secondary">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Nombres Completos</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">Nombres Completos</div>
                    </div>
                    <p class="form-control">{{ $user->name }} </p>
                </div>
            </div>
            <div class="form-group col-md-6">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Email</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                    </div>
                    <p class="form-control">{{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
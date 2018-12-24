@extends('admin2.admin')

@section('content_galleries')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                <span class="input-group-btn">
                    @can('properties.create')
                    <a href="{{ route('properties.create') }}" class="btn btn-outline-success btn-sm" role="button">Registrar Propiedad</a>
                    @endcan
                </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                {!! Form::open(['route' => ['galleries.index'], 'method' => 'GET', 'class' => '', 'role' => 'search']) !!}
                <div class="input-group input-group-sm">
                <input type="text" name="name" class="form-control " placeholder="Buscar...">
                <span class="input-group-btn">
                    <button class="btn btn-outline-info btn-sm" type="submit">Buscar!</button>
                </span>
                </div><!-- /input-group -->
                {!! Form::close() !!}
            </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div>    
    <div class="card-body text-secondary">
        @include('admin2.components.properties.galleries')    
    </div>
    </div>
</div
@endsection
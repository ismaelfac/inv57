@extends('admin2.admin')
@section('style')
<style>
.banner-img {
	padding: 5px 5px 0;
}

.banner-img img {
	width: 100%;
	border-radius: 5px;
}
</style>
@stop
@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Editar Propiedad
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            <a href="{{ route('properties.index') }}" class="btn btn-outline-success"> Regresar</a>
            <a href="#" class="btn btn-outline-danger"> PDF</a>
        </div>
    </div>
     <div class="card-body text-secondary">
        <b-card no-body>
            {!! Form::model($property, ['route' => ['properties.update', $property], 'method' => 'PUT']) !!}
            <button type="submit" class="btn btn-outline-success btn-sm">Actualizar Propiedad</button>
            <b-tabs card>
            <b-tab title="Principal" active>@include('admin2.components.properties.infobasic')</b-tab>
            <b-tab title="Caracteristicas"> @include('admin2.components.properties.features')</b-tab>
            <b-tab title="Ubicación">@include('admin2.components.properties.location')</b-tab>
            {!! Form::close() !!}
            <b-tab title="Galeria" > @include('admin2.components.properties.galleries')</b-tab>
            <b-tab title="Propietario" > @include('admin2.components.properties.owner')</b-tab>
            <b-tab title="Ofertantes" > @include('admin2.components.properties.bidders')</b-tab>
            </b-tabs>
            
        </b-card>
    </div>
</div>
@endsection
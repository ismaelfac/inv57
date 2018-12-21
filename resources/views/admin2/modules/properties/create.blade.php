@extends('admin2.admin')
@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
        <div class="card-header">Crear Propiedades
            <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                <a href="{{ route('properties.index') }}" class="btn btn-outline-danger"> Cancelar</a>
            </div>
        </div>
        <div class="card-body text-secondary">
           <b-card no-body>
                <b-tabs card>
                <b-tab title="Principal" active>
                    @include('admin2.components.properties.infobasic')
                </b-tab>
                <b-tab title="Caracteristicas">Caracteristicas</b-tab>
                <b-tab title="Propietario">Propietario</b-tab>
                <b-tab title="Historial de Precios">Historial de Precios</b-tab>
                <b-tab title="Ofertantes">Ofertantes</b-tab>
                </b-tabs>
            </b-card>
        </div>
    </div>
</div>
@endsection
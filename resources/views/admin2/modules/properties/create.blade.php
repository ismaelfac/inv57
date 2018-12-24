@extends('admin2.admin')
@section('style')
<style>
    #myCarousel .list-inline {
        white-space:nowrap;
        overflow-x:auto;
    }

    #myCarousel .carousel-indicators {
        position: inherit;
        left: initial;
        width: initial;
    }

    #myCarousel .carousel-indicators > li {
        width: initial;
        height: initial;
        text-indent: initial;
    }

    #myCarousel .carousel-indicators > li.active img {
        opacity: 0.7;
    }
    ul.timeline {
    list-style-type: none;
    position: relative;
    }
    ul.timeline:before {
        content: ' ';
        background: #d4d9df;
        display: inline-block;
        position: absolute;
        left: 29px;
        width: 2px;
        height: 100%;
        z-index: 400;
    }
    ul.timeline > li {
        margin: 20px 0;
        padding-left: 20px;
    }
    ul.timeline > li:before {
        content: ' ';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #22c0e8;
        left: 20px;
        width: 20px;
        height: 20px;
        z-index: 400;
    }
</style>
@stop
@section('content')
<div class="card">
    <div class="card-header">Crear Propiedades
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            <a href="{{ route('properties.index') }}" class="btn btn-outline-danger"> Cancelar</a>
        </div>
    </div>
    <div class="card-body text-secondary">
        <b-card no-body>
            {!! Form::open(['route' => ['properties.store'], 'method' => 'POST']) !!}
            <button type="submit" class="btn btn-outline-success btn-sm">Crear Propiedad</button>
            <b-tabs card>@can('properties.create')
            <b-tab title="Principal" active>@include('admin2.components.properties.infobasic')</b-tab>
            <b-tab title="Caracteristicas"> @include('admin2.components.properties.features')</b-tab>
            <b-tab title="Ubicación">@include('admin2.components.properties.location')</b-tab>@endcan
            {!! Form::close() !!}
            </b-tabs>
        </b-card>
    </div>
</div>
@endsection

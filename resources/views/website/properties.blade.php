@extends('index')
@section('script')
    
@endsection
@section('content')
<!-- BREADCRUMBS AREA START -->
    <div class="breadcrumbs-area bread-bg-property bg-opacity-black-70">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs">
                        <h2 class="breadcrumbs-title"></h2>
                        <ul class="breadcrumbs-list">
                            <li><a href="{{ url('') }}">Inicio</a></li>
                            <li>Inmobiliaria</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- BREADCRUMBS AREA END -->
<!-- Start page content -->
<section id="page-content" class="page-wrapper">

    <property-component></property-component>
             
    <!-- SUBSCRIBE AREA START -->
        @include('components.subscribe')
    <!-- SUBSCRIBE AREA END -->                    
</section>
@endsection
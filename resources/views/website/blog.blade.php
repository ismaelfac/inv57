@extends('index')

@section('content')
   <!-- BREADCRUMBS AREA START -->
        <div class="breadcrumbs-area bread-bg-blog bg-opacity-black-70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs">
                            <h2 class="breadcrumbs-title"></h2>
                            <ul class="breadcrumbs-list">
                                <li><a href="{{ url('/') }}">Inicio</a></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS AREA END -->

        <!-- Start page content -->
                    <blog-component></blog-component>
        <section id="page-content" class="page-wrapper">
            <div class="blog-area pt-115 pb-120">
                <div class="container">
                </div>
            </div>
            <!-- SUBSCRIBE AREA START -->
             @include('components.subscribe')
            <!-- SUBSCRIBE AREA END -->
        </section>
        <!-- End page content -->
@endsection
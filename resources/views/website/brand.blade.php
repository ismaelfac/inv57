@extends('index')

@section('content')
  <!-- BREADCRUMBS AREA START -->
        <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs">
                        <h2 class="breadcrumbs-title"></h2>
                            <ul class="breadcrumbs-list">
                                <li><a href="{{ url('') }}">Inicio</a></li>
                                <li>Marca</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS AREA END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- ABOUT SHELTEK AREA START -->
            <div class="about-sheltek-area ptb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-sm-7 col-xs-12">
                            <div class="section-title mb-30">
                                <h3>ASESORIA INMOBILIARIA </h3>
                                <h2>REGIÓN COSTA NORTE</h2>
                            </div>
                            <div class="about-sheltek-info">
                                <div class="author-quote">
                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Orientado a: </span><br> 1. Empresas en Expansión. <br> 2. Marcas enfocadas en mejorar su posicionamiento e imagen comercial en la región. <br> 3. Inversionistas. </p>
                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Propuesta: </span><br> Estudio de factibilidad: define el presupuesto, segmento de mercado según categoría comercial, tipo y formato de inmueble requerido, definir inmuebles en Centros comerciales o la Calle, información de la marca, análisis de la competencia.</p>
                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Busqueda y Presentación de Espacios disponibles según estudio de factibilidad: </span><br>Incluye ficha técnica del inmueble con todas sus características, análisis DOFA, uso del suelo resaltando actividades autorizadas y adecuaciones permitidas, valor del M2 por zona, acompañamiento en negociaciones.</p>
                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Oportunidades y planes de inversión en el sector elegido: </span><br>Presentación de oportunidades de inversión y proyección de crecimiento del sector elegido por ciudad, incluyendo información de obras de mejoramiento desarrolladas en el sector que impacten en la valorización del inmueble sugerido.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 col-sm-5 col-xs-12">
                            <div class="about-image mt-100">
                                <img src="website/images/brand/asesoria_inmobiliaria.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-sheltek-area ptb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-push-6 col-xs-12">
                            <div class="section-title mt-60">
                                <h3>NOTICIAS Y TESTIMONIOS DE</h3>
                                <h2>INVERSIONISTAS</h2>
                            </div>
                            <div class="about-sheltek-info mt-30">
                                <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">SUBSCRIBE</span>Conocemos de los riezgos de inversión, por eso colocamos a tu disposición las opiniones de inversionistas, medios expertos y de Inversiones y Proyectos.</p>
                                <div class="author-quote">
                                    <p>Conoce las opiniones en medios reconocidos </p>
                                    
                                 </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-pull-6 col-xs-12">
                            <div class="about-image">
                                <img src="website/images/brand/rankings.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-sheltek-area ptb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-push-6 col-xs-12">
                            <div class="section-title mb-30">
                                <h3>REGISTRATE Y COTIZA</h3>
                                <h2>CON NOSOTROS:</h2>
                            </div>
                            <div class="about-sheltek-info">
                                <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Ventajas de registrarte con nosotros.</span> </p>
                                <div class="author-quote">
                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Boletines informativos: </span>Sobre noticias, blogs, y las ultimas propiedades postuladas en nuestra plataforma.</p>
                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Opiniones: </span>Crea tu blog.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-pull-6 col-xs-12">
                            <div class="about-image">
                                <img src="website/images/brand/boletin_semanal.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT SHELTEK AREA END -->
            
            <!-- PROPERTIES VIDEO AREA START -->
            <div class="properties-video-area pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title-2 text-center">
                                <h2>Barranquilla y la Costa están ‘jalonando’ el desarrollo del país</h2>
                                <p>La región atlántica vive un presente destacado en el desarrollo económico de Colombia y puntualmente en el campo de la construcción. Conozca los motivos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="properties-video">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://player.vimeo.com/video/117765418?title=0&byline=0&portrait=0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PROPERTIES VIDEO AREA END -->
            
            <!-- BOOKING AREA START -->
            <div class="booking-area bg-1 call-to-bg plr-140 pt-75">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="section-title text-white">
                                <h3>GRAN</h3>
                                <h2 class="h1">INVENTARIO</h2>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-8 col-xs-12">
                            <div class="booking-conternt  clearfix">
                                <div class="counter-content">
                                    <!-- counter-item -->
                                    <div class="counter-item">
                                        <h2>
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span class="counter">50</span>
                                        </h2>
                                        <p>Casas Comerciales</p>
                                    </div>
                                    <!-- counter-item -->
                                    <div class="counter-item">
                                        <h2>
                                            <i class="fa fa-key" aria-hidden="true"></i>
                                            <span class="counter">80</span>
                                        </h2>
                                        <p>Propiedades</p>
                                    </div>
                                    <!-- counter-item -->
                                    <div class="counter-item">
                                        <h2>
                                            <i class="fa fa-smile-o" aria-hidden="true"></i>
                                            <span class="counter">350</span>
                                        </h2>
                                        <p>Clientes felices</p>
                                    </div>
                                    <!-- counter-item -->
                                    <div class="counter-item">
                                        <h2>
                                            <i class="fa fa-building" aria-hidden="true"></i>
                                            <span class="counter">100</span>
                                        </h2>
                                        <p>Proyectos Inmobiliarios</p>
                                    </div>
                                </div>
                                <div class="booking-imgae">
                                    <img src="website/images/others/booking.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BOOKING AREA END -->

            <!-- TESTIMONIAL AREA START -->
            <div class="testimonial-area pt-115 pb-115">
            @include('components.testimonial')
            </div>
            <!-- TESTIMONIAL AREA END -->

            <!-- BRAND AREA START -->
            @include('components.brands')
            <!-- BRAND AREA END -->
            
            <!-- SUBSCRIBE AREA START -->
                @include('components.subscribe')
            <!-- SUBSCRIBE AREA END -->
        </section>
        <!-- End page content -->
@endsection
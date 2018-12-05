<?php include_once 'includes/templates/header.php' ?>

    <!--Carousel Wrapper-->
    <div id="slider-kevtech" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">


        <ol class="carousel-indicators">
            <li data-target="#slider-kevtech" data-slide-to="0" class="active"></li>
            <li data-target="#slider-kevtech" data-slide-to="1"></li>
            <li data-target="#slider-kevtech" data-slide-to="2"></li>
        </ol>


        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">
                <!--Mask-->
                <div class="view">
                    <div class="full-bg-img flex-center mask rgba-black-strong white-text">
                        <ul class="animated fadeInDownBig col-md-12 list-unstyled list-inline">
                            <li class="container">
                                <img src="img/logos/logo_full.png" class="mx-auto d-block img-fluid full-imagen" alt="">
                            </li>
                            <li>
                                <p class="font-weight-bold text-uppercase py-4">Especializados en Diseño Web para ti y tu negocio.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/.Mask-->
            </div>
            <!--/.First slide-->

            <!--Second slide -->
            <div class="carousel-item">
                <!--Mask-->
                <div class="view">
                    <div class="full-bg-img flex-center mask rgba-black-strong white-text">
                        <ul class="animated fadeInUp col-md-12 list-unstyled">
                            <li>
                                <h1 class="font-weight-bold text-uppercase">Diseño Responsivo</h1>
                            </li>
                            <li>
                                <p class="font-weight-bold text-uppercase py-4">Todos nuestros trabajos son 100% adaptables a cualquier dispositivo: Smartphones, Tabletas y PC.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/.Mask-->
            </div>
            <!--/.Second slide -->

            <!--Third slide-->
            <div class="carousel-item">
                <!--Mask-->
                <div class="view">
                    <div class="full-bg-img flex-center mask rgba-black-strong white-text">
                        <ul class="animated fadeInUp col-md-12 list-unstyled">
                            <li>
                                <h1 class="font-weight-bold text-uppercase">Páginas Optimizadas</h1>
                            </li>
                            <li>
                                <p class="font-weight-bold text-uppercase py-4">Nuestros sitios web estan completamente optimizados para obtener los tiempos de respuesta más rapidos.</p>
                            </li>
                            <li>
                                <a target="_blank" href="#" class="btn btn-lg btn-indigo btn-rounded">Contactanos</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/.Mask-->
            </div>
            <!--/.Third slide-->

        </div>
        <!--/.Slides-->


        <a class="carousel-control-prev" href="#slider-kevtech" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#slider-kevtech" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>

    </div>
    <!--/.Carousel Wrapper-->

    <section class="seccion servicios">
        <div class="container">
            <h2>Nuestros Servicios</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="img-servicio"><img src="img/servicios/ux.svg" class="img-fluid" style="max-width:25%;" alt=""></div>
                    <h3 class="titulo-servicio">Diseño Web</h3>
                    <p class="servicio-descripcion text-center">Paquetes de diseño web adaptados a tus necesidades utilizando las tecnologías más recientes.</p>
                </div>
                <div class="col-md-4">
                    <div class="img-servicio"><img src="img/servicios/ecommerce.svg" class="img-fluid" style="max-width:25%;" alt=""></div>
                    <h3 class="titulo-servicio">Tienda en Linea</h3>
                    <p class="servicio-descripcion text-center">Mantente a la vanguardia y ofrece tus productos en linea con nuestros diseños de e-comerce.</p>
                </div>
                <div class="col-md-4">
                    <div class="img-servicio"><img src="img/servicios/app.svg" class="img-fluid" style="max-width:25%;" alt=""></div>
                    <h3 class="titulo-servicio">Aplicaciones Web</h3>
                    <p class="servicio-descripcion text-center">Lleva un control de tus ventas, inventarios y más con nuestras aplicaciones a la medida.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="seccion portafolio parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Aplicaciones por KevTech Soluciones</h3>
                    <br>
                    <p>Sabemos lo escencial que es en la actualidad mantener un control preciso de la administración de los procesos de tu negocio desde ventas hasta la administración de personal, es por ello que en KevTech desarrollamos aplicaciones para satisfacer las necesidades de cualquier sector en el area administrativa o de ventas, modernizando sus funciones y sobre todo simplificando y optimizando el trabajo.</p>
                    <button class="btn btn-outline-warning">Aplicaciones</button>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img class="img-fluid" src="img/logos/logo_app.png">
                </div>
            </div>
        </div>
    </section>

    <section class="seccion contacto">

        <div class="container">
            <h2>Contactanos</h2>
            <p class="text-center w-responsive mx-auto mb-5">Solicita información o cotizaciones llenando el siguiente formulario ó comunicandote con nosotros por el medio de tu preferencia, responderemos tu solicitud lo antes posible.</p>
            <section class="contact-section my-5">

                <!-- Form with header -->
                <div class="card">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-lg-8">

                            <div class="card-body form">

                                <!-- Header -->
                                <h3 class="mt-4"><i class="fa fa-envelope pr-2"></i>Escribenos:</h3>

                                <!-- Grid row -->
                                <div class="row">

                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="form-contact-name" class="form-control">
                                            <label for="form-contact-name" class="">Tu nombre</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="form-contact-email" class="form-control">
                                            <label for="form-contact-email" class="">Tu correo electrónico</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                </div>
                                <!-- Grid row -->

                                <!-- Grid row -->
                                <div class="row">

                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="form-contact-phone" class="form-control">
                                            <label for="form-contact-phone" class="">Tu teléfono</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="form-contact-company" class="form-control">
                                            <label for="form-contact-company" class="">Asunto</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                </div>
                                <!-- Grid row -->

                                <!-- Grid row -->
                                <div class="row">

                                    <!-- Grid column -->
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <textarea type="text" id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                                            <label for="form-contact-message">Tu mensaje</label>
                                            <a class="btn-floating btn-lg blue darken-3">
                                                <i class="fab fa-telegram-plane"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                </div>
                                <!-- Grid row -->

                            </div>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-4">

                            <div class="card-body contact text-center h-100 white-text">

                                <h3 class="my-4 pb-2">Información de Contacto</h3>
                                <ul class="text-lg-left list-unstyled ml-4 contacto-blanco">
                                    <li>
                                        <p><i class="fa fa-phone pr-2"></i>+52 (55) 8190-4289</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-envelope pr-2"></i>contacto@kevtech.com.mx</p>
                                    </li>
                                </ul>
                                <hr class="hr-light my-4">
                                <div class="container text-center">
                                    <nav class="redes-sociales text-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </nav>
                                </div>

                            </div>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Form with header -->

            </section>
            <!-- Section: Contact v.3 -->
        </div>

    </section>

<?php include_once 'includes/templates/footer.php' ?>
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark" style="padding-top: 20px;">

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

        <!-- Grid row -->
        <div class="row mt-3">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">KEVTECH SOLUCIONES</h6>
                <hr class="blue darken-3 accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>KevTech Soluciones es una empresa especializada en diseño de páginas web profesionales, dedicados a crear la mejor solución web para tu presencia en la red.</p>


            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 d-none d-md-block">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Servicios</h6>
                <hr class="blue darken-3 accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!">Páginas Web</a>
                </p>
                <p>
                    <a href="#!">E-comerce</a>
                </p>
                <p>
                    <a href="#!">Aplicaciones</a>
                </p>


            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 d-none d-md-block">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Recursos</h6>
                <hr class="blue darken-3 accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!">Blog</a>
                </p>
                <p>
                    <a href="#!">Nosotros</a>
                </p>
                <p>
                    <a href="#!">Aviso de Privacidad</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Contacto</h6>
                <hr class="blue darken-3 accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fa fa-envelope mr-3"></i> contacto@kevtech.com.mx</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> +52 (55) 8190-4289</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->
    <div class="container text-center" style="padding-bottom: 20px;">
        <nav class="redes-sociales text-center">
            <a href="https://www.facebook.com/pg/KevTechSoluciones"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/KevTechS"><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/channel/UCk1W6fH_KxH3FkA-1vkQsaQ"><i class="fab fa-youtube"></i></a>
            <a href="https://www.instagram.com/kevtechs/"><i class="fab fa-instagram"></i></a>
        </nav>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://kevtech.com.mx"> KevTech Soluciones</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- JavaScript -->
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<?php 
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace(".php", "", $archivo);
if ($pagina == 'index'){
    echo '<script src="js/navbar.js"></script>';
}
?>

<script src="js/kevtech.js"></script>

<?php 
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace(".php", "", $archivo);
?>
</body>

</html>
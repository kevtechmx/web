<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/logos/icon.png" type="image/x-icon">
    <title>KevTech Soluciones: Diseño profesional de páginas web, desarrollo de aplicaciones web.</title>
    <meta name="description" content="Diseño de Páginas Web responsivas para tu negocio. Aplicaciones y soluciones empresariales en materia informática." />
    <link rel="canonical" href="https://kevtech.com.mx" />
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/full-slider.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/kevtech.css">


    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<?php 
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace(".php", "", $archivo);
?>
</head>

<body>

    <section id="top-section"></section>
    <div class="fixed-action-btn smooth-scroll" style="bottom: 45px; right: 24px;">
        <a href="#" id="top-scroll" class="btn-floating btn-large blue darken-3">
            <i class="fas fa-arrow-up"></i>
        </a>
    </div>

    <nav class="kevtech-nav navbar navbar-expand-lg fixed-top scrolling-navbar navbar-dark <?php if ($pagina != 'index'){echo 'bg-dark';} ?>">
        <div class="container">
            <a class="navbar-brand" href="https://kevtech.com.mx">
                <img src="img/logos/logo_mini.png" height="30" alt="KevTech logo_mini">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php if ($pagina == 'index'){echo 'active';} ?>">
                        <a class="nav-link" href="https://kevtech.com.mx">Inicio</a>
                    </li>
                    <li class="nav-item <?php if ($pagina == 'nosotros'){echo 'active';} ?>">
                        <a class="nav-link" href="nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item <?php if ($pagina == 'servicios'){echo 'active';} ?>">
                        <a class="nav-link" href="servicios.php">Servicios</a>
                    </li>
                    <li class="nav-item <?php if ($pagina == 'blog'){echo 'active';} ?>">
                        <a class="nav-link" href="https://kevtech.com.mx/blog">Blog</a>
                    </li>
                    <li class="nav-item <?php if ($pagina == 'contacto'){echo 'active';} ?>">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Barra de Navegación-->
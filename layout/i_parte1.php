<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEMA VETERINARIA</title>
    <!--CSS-->
    <link rel="stylesheet" href="styles.css">
    <!--JQUERY-->
    <script src="public/js/jquery-3.7.1.min.js"></script>
   <!-- BOOSTRAP INSTALADO-->
    <link href="public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!--ICONOS BOOSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--FULLCALLENDAR-->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js'></script>
  </head>
  <body>
  <!--NAV-->
  <nav class="navbar navbar-expand-lg bg-info shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="https://static.vecteezy.com/system/resources/thumbnails/006/470/429/small/pet-shop-logo-design-template-modern-animal-icon-label-for-store-veterinary-clinic-hospital-shelter-business-services-flat-illustration-background-with-dog-cat-and-horse-free-vector.jpg" 
           alt="Logo" width="60" height="35" class="d-inline-block me-2">
      <span class="fw-bold text-dark">Veterinaria Corazón</span>
    </a>

    <!-- BOTON RESPONSIVE -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- MENU-->
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
        <li class="nav-item">
          <a class="nav-link text-dark fw-semibold" href="index.php"><i class="bi bi-house-heart-fill me-1"></i>Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark fw-semibold" href="#"><i class="bi bi-calendar-check me-1"></i>Reservar Cita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark fw-semibold" href="tienda.php"><i class="bi bi-bag me-1"></i>Tienda Online</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle me-1"></i>Ingresar
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login/login.php">Iniciar Sesión</a></li>
            <li><a class="dropdown-item" href="login/registro.php">Registrarme</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


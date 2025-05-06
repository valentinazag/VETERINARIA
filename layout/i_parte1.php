<?php session_start(); 
if (isset($_SESSION['sesion_email'])){
  $email = $_SESSION['sesion_email'];

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($usuarios as $usuario){
  $id_usuario = $usuario['id_user'];
  $id_session = $usuario['id_user'];
  $cargo_session= $usuario['cargo'];
  $nombre_entero= $usuario['nombre_completo'];
}

}

?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEMA VETERINARIA</title>
    <!--CSS-->
    <link rel="stylesheet" href="styles.css">
    <!--JQUERY-->
    <script src="<?php echo $URL; ?>/public/js/jquery-3.7.1.min.js"></script>
    <!-- BOOTSTRAP -->
    <link href="<?php echo $URL; ?>/public/css/bootstrap.min.css" rel="stylesheet">
    <!-- ICONOS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- FULLCALENDAR -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js'></script>
  </head>
  <body>
    <!-- NAV -->
    <nav class="navbar navbar-expand-lg bg-info shadow-sm sticky-top">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="https://static.vecteezy.com/system/resources/thumbnails/006/470/429/small/pet-shop-logo-design-template-modern-animal-icon-label-for-store-veterinary-clinic-hospital-shelter-business-services-flat-illustration-background-with-dog-cat-and-horse-free-vector.jpg" 
               alt="Logo" width="60" height="35" class="d-inline-block me-2">
          <span class="fw-bold text-dark">Veterinaria Corazón</span>
        </a>

        <!-- BOTÓN RESPONSIVE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENÚ -->
        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
            <li class="nav-item">
              <a class="nav-link text-dark fw-semibold" href="index.php">
                <i class="bi bi-house-heart-fill me-1"></i>Inicio
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-semibold" href="reservas.php">
                <i class="bi bi-calendar-check me-1"></i>Reservar Cita
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-semibold" href="tienda.php">
                <i class="bi bi-bag me-1"></i>Tienda Online
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-semibold" href="carrito.php">
              <i class="bi bi-cart-plus"></i>Carrito
              </a>
            </li>
            <!-- DROPDOWN DE USUARIO -->
            <li class="nav-item dropdown">
              <?php if (isset($_SESSION['sesion_email'])): ?>
                <a class="nav-link dropdown-toggle text-dark fw-semibold" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                  <i class="bi bi-person-circle me-1"></i>Mi Cuenta
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                  <li><a class="dropdown-item" href="<?php echo $URL; ?>/cliente/perfil.php?id_usuario=<?php echo $id_usuario;?>">Perfil</a></li>
                  <li><a class="dropdown-item" href="mascotas.php">Mascotas</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item text-danger" href="<?php echo $URL;?>/app/controllers/login/cerrar.php">Cerrar Sesión</a></li>
                </ul>
              <?php else: ?>
                <a class="nav-link dropdown-toggle text-dark fw-semibold" href="#" id="authDropdown" role="button" data-bs-toggle="dropdown">
                  <i class="bi bi-person-circle me-1"></i>Ingresar
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="authDropdown">
                  <li><a class="dropdown-item" href="login/login.php">Iniciar Sesión</a></li>
                  <li><a class="dropdown-item" href="login/registro.php">Registrarme</a></li>
                </ul>
              <?php endif; ?>
            </li>

          </ul>
        </div>
      </div>
    </nav>
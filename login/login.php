<?php
include("../app/config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo APP_NAME?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
   <!-- CSS -->
  <link rel="stylesheet" href="../public/css/login.css">
</head>
<body class="hold-transition login-page">
<div class="login-box"> 
  <div class="login-logo">
    <a href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/index2.html"><b>INICIAR SESIÓN</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><b>Ingresa tus datos </b></p>
      <hr>
      <form action="<?php echo $URL;?>/app/controllers/login/controller_login.php" method="post">
        <label for="">Correo electrónico</label>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <label for="">Contraseña</label>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <hr>
        <button class="btn btn-primary" type="submit" style="width:100%;";>Ingresar</button>
        <br><br>
        <a href="<?php echo $URL;?>/index.php" class="btn btn-secondary" style="width:100%;">Cancelar</a>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>

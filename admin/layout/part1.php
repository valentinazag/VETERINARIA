<?php
session_start();
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

} else{
 header('Location: '.$URL.'/login/login.php');
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title><?php echo APP_NAME?></title>

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
 <!-- jQuery para que funcione SweetAlert -->
 <script src="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
 <!-- Sweet Alert -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
 <!-- DataTables PAGINACION-->
 <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
 <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
 <!--CSS PARTE1-->
 <link rel="stylesheet" href="../../public/css/parte1.css">
<!--ICONOS BOOSTRAP-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
       <a href="<?php echo $URL; ?>/admin/admin.php" class="nav-link"><?php echo APP_NAME ?></a>
     </li>
   </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
     <!-- Notifications Dropdown Menu -->
     <li class="nav-item dropdown">
       <a class="nav-link" data-toggle="dropdown" href="#">
         <i class="far fa-bell"></i>
         <span class="badge badge-warning navbar-badge">15</span>
       </a>
       <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         <span class="dropdown-header">15 Notifications</span>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <i class="fas fa-envelope mr-2"></i> 4 new messages
           <span class="float-right text-muted text-sm">3 mins</span>
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <i class="fas fa-users mr-2"></i> 8 friend requests
           <span class="float-right text-muted text-sm">12 hours</span>
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <i class="fas fa-file mr-2"></i> 3 new reports
           <span class="float-right text-muted text-sm">2 days</span>
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
       </div>
     </li>
     <li class="nav-item">
       <a class="nav-link" data-widget="fullscreen" href="#" role="button">
         <i class="fas fa-expand-arrows-alt"></i>
       </a>
     </li>
   </ul>
 </nav>
 <!-- /.navbar -->

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="<?php echo $URL; ?>/admin/admin.php" class="nav-link" class="brand-link">
     <img src="<?php echo $URL;?>/public/images/logo.jfif" alt="Veterinaria Logo" class="brand-image img-circle elevation-3" style="opacity: .8; width: 20%; margin-bottom: 0%;">
     <span class="brand-text font-weight-light" style= "color:white;">SIS - Veterinario</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="info">
         <a href="#" class="d-block"><b>Bienvenido </b><br> <?php echo $nombre_entero ?></a> 
       </div>
     </div>

    

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item">
           <a href="#" class="nav-link active usu">
             <i class="nav-icon fas fa-users"></i>
             <p>
               Usuarios
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo $URL?>/admin/usuarios/registro.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Nuevo usuario</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo $URL?>/admin/usuarios/usuarios.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Listado de usuarios</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo $URL?>/admin/usuarios/papelera.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Papelera de usuarios</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link active usu">
           <i class="bi bi-basket2-fill"> </i>
             <p>
              Productos
              <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo $URL?>/admin/productos/registro_prod.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Nuevo producto</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo $URL?>/admin/productos/productos.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Listado de productos</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo $URL?>/admin/productos/papelera_p.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Papelera de productos</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link active usu">
           <i class="bi bi-basket2-fill"> </i>
             <p>
              Servicios
              <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo $URL?>/admin/servicios/registro_ser.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Nuevo servicio</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo $URL?>/admin/servicios/servicios.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Listado de servicios</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo $URL?>/admin/servicios/papelera_s.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Papelera de servicios</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="<?php echo $URL;?>/app/controllers/login/cerrar.php" class="nav-link active" style="background-color:red; margin-top:5%; margin-left: 1.2%;">
             <i class="nav-icon fas fa-door-open"></i>
             <p>
               Cerrar Sesión
             </p>
           </a>
         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">

   <!-- Main content -->
   <div class="content">
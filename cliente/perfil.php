<?php 
include('../app/config.php');
include('../layout/i_parte1.php');
$id_usuario = $_GET['id_usuario'];
include('../app/controllers/usuarios/datos_users.php');
?>
<link href="<?php echo $URL;?>//public/css/usuario.css" rel="stylesheet">

<div class="container-fluid">
  <br>
  <h1 style="margin-left: 5%;">Información del usuario</h1>
  <div class="row">
    <div class="col-md-8">
      <div class="card card-outline card-primary carta">
        <div class="card-header he">
          <h3 class="card-title"><b>Datos registrados</b></h3>
        </div>            
        <div class="card-body">
          <div class="row align-items-center">
           <!-- Foto -->
          <div class="col-md-3 text-center">
                <div class="form-group foto-perfil">                                   
                <?php
$existe_imagen = !empty($imagen_u) && file_exists("../public/images/usuarios/" . $imagen_u);
$imagen_src = $existe_imagen ? $URL."/public/images/usuarios/".$imagen_u : $URL."/public/images/usuarios/default.jpg";
?>
<img src="<?php echo $imagen_src; ?>" alt="Foto de perfil" width="150px" class="img-fluid">
                </div>
          </div>
  <!-- Datos -->
  <div class="col-md-9">
    <div class="row mb-3">
      <div class="col-md-6">
        <label><b>Nombre</b></label>
        <input type="text" value="<?php echo $nombre;?>" class="form-control" disabled>
      </div>
      <div class="col-md-6">
        <label><b>Celular</b></label>
        <input type="text" value="<?php echo $celular;?>" class="form-control" disabled>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-6">
        <label><b>Correo electrónico</b></label>
        <input type="email" value="<?php echo $email;?>" class="form-control" disabled>
      </div>
      <div class="col-md-6">
        <label><b>Fecha de alta</b></label>
        <input type="text" value="<?php echo $fyh_creacion;?>" class="form-control" disabled>
      </div>
    </div>
    <hr>
    <!-- Botones -->
    <div class="d-flex justify-content-end gap-2 mt-3">
      <a href="../../admin/usuarios/usuarios.php" class="btn btn-secondary">Cancelar</a>
      <a href="update.php?id_usuario=<?php echo $id_usuario;?>" class="btn btn-success">Editar</a>
      <a href="delete.php?id_usuario=<?php echo $id_usuario;?>" class="btn btn-danger">Eliminar cuenta</a>
    </div>
  </div>
</div>
        </div> <!-- card-body -->
      </div> <!-- card -->
    </div> <!-- col-md-8 -->
  </div> <!-- row -->
</div> <!-- container-fluid -->
<?php
include('../layout/i_parte2.php');
?>


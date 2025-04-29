<?php 
include('../../app/config.php');
include('../../admin/layout/part1.php');
$id_usuario = $_GET['id_usuario'];
include('../../app/controllers/usuarios/datos_users.php');

?>
<head>
<link rel="stylesheet" href="../../public/css/registro.css">
</head>
<div class="container-fluid">
  <h1>Información del usuario</h1>
  <div class="row">
    <div class="col-md-8">
      <div class="card card-outline card-primary carta">
        <div class="card-header">
          <h3 class="card-title"><b>Datos registrados</b></h3>
        </div>            
        <div class="card-body">
            <!-- Primera fila -->
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Nombre completo</label>
                  <input type="text" value="<?php echo $nombre;?>" name="nombre_completo" class="form-control" disabled>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Correo electrónico</label>
                  <input type="email" value="<?php echo $email;?>" name="email" class="form-control" disabled>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Celular</label>
                  <input type="text" value="<?php echo $celular;?>" name="celular" class="form-control" disabled>
                </div>
              </div>
            </div>

            <!-- Segunda fila -->
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Cargo</label>
                  <input type="text" class="form-control" value="<?php echo $cargo;?>" disabled>
                </div>
              </div>
            </div> 
            <hr style="border-top: 1px solid #007bff;">
            <div class="row">
            <div class="col-md-12">
                  <a href="../../admin/usuarios/usuarios.php" class="btn btn-secondary">Cancelar</a>
                  <a href="update.php?id_usuario=<?php echo $id_usuario;?>" class="btn btn-success text-white">Editar</a>
                  <a href="delete.php?id_usuario=<?php echo $id_usuario;?>" class="btn btn-danger text-white"> Eliminar</a>
                </div>
            </div>        
        </div> <!-- card-body -->
      </div> <!-- card -->
    </div> <!-- col-md-8 -->
  </div> <!-- row -->
</div> <!-- container-fluid -->
<?php 
include('../../admin/layout/part2.php');
include('../../admin/layout/mensaje.php');
?>



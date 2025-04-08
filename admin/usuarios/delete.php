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
  <h1>Eliminar usuario</h1>
  <div class="row">
    <div class="col-md-8">
      <div class="card card-outline card-danger carta">
        <div class="card-header">
          <h3 class="card-title"><b>¿Esta seguro de eliminar este usuario?</b></h3>
        </div>            
        <div class="card-body">
            <!-- Primera fila -->
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Nombre completo<b>*</b></label>
                  <input type="text" value="<?php echo $nombre;?>" name="nombre_completo" class="form-control" desabled>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Correo electrónico<b>*</b></label>
                  <input type="email" value="<?php echo $email;?>" name="email" class="form-control" desabled>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Celular<b>*</b></label>
                  <input type="text" value="<?php echo $celular;?>" name="celular" class="form-control" desabled>
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
            <hr style="border-top: 1px solid #d9534f;">
            <div class="row">
               <div class="col-md-12">
                  <form action="<?php echo $URL?>/app/controllers/usuarios/eliminar.php" method="POST">
                  <a href="../../admin/usuarios/usuarios.php" class="btn btn-secondary">Cancelar</a>
                  <input type="text" name="id_usuario" value="<?php echo $id_usuario?>" hidden>
                  <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                  </form>
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



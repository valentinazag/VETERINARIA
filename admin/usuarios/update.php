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
  <h1>Editar usuario</h1>
  <div class="row">
    <div class="col-md-8">
      <div class="card card-outline card-success carta">
        <div class="card-header">
          <h3 class="card-title"><b>Datos del Usuario</b></h3>
        </div>            
        <div class="card-body">
          <form action="../../app/controllers/usuarios/actualizar.php" method="POST">
            <!-- Primera fila -->
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Nombre completo<b>*</b></label>
                  <input type="text" value="<?php echo $nombre;?>" name="nombre_completo" class="form-control" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Correo electrónico<b>*</b></label>
                  <input type="email" value="<?php echo $email;?>" name="email" class="form-control" disabled>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Celular<b>*</b></label>
                  <input type="text" value="<?php echo $celular;?>" name="celular" class="form-control" required>
                </div>
              </div>
            </div>

            <!-- Segunda fila -->
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Contraseña</label>
                  <input type="password" name="password" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Verificar contraseña</label>
                  <input type="password" name="password_verify" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Cargo<b>*</b></label>
                  <select name="cargo" id="cargo" class="form-control" required>
                    <?php
                    if ($cargo == "ADMINISTRADOR"){?>
                     <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                     <option value="CLIENTE">CLIENTE</option>
                    <?php
                    }else{?>
                    <option value="CLIENTE">CLIENTE</option>
                    <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                    <?php
                    }
                    ?>    
                </select>
                </div>
              </div>
            </div>
            <input type="text" name="id_usuario" value="<?php echo $id_usuario?>" hidden>
            <hr style="border-top: 1px solid #198754;">
            <div class="row">
               <div class="col-md-12">
                  <a href="../../admin/usuarios/usuarios.php" class="btn btn-secondary">Cancelar</a>
                  <input type="submit" class="btn btn-success" value="Actualizar usuario">
               </div>
            </div>
          </form>
        </div> <!-- card-body -->
      </div> <!-- card -->
    </div> <!-- col-md-8 -->
  </div> <!-- row -->
</div> <!-- container-fluid -->
<?php 
include('../../admin/layout/part2.php');
include('../../admin/layout/mensaje.php');
?>



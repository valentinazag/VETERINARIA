<?php 
include('../../app/config.php');
include('../../admin/layout/part1.php');
?>
<div class="container-fluid">
  <h1>Registro de usuarios</h1>
  <div class="row">
    <div class="col-md-8">
      <div class="card card-outline card-primary">
        <div class="card-header">
          <h3 class="card-title"><b>Datos del Usuario</b></h3>
        </div>            
        <div class="card-body">
          <form action="" method="">
            <!-- Primera fila -->
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Nombre completo</label>
                  <input type="text" class="form-control" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Correo electrónico</label>
                  <input type="email" class="form-control" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Celular</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>

            <!-- Segunda fila -->
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Contraseña</label>
                  <input type="password" class="form-control" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Verificar contraseña</label>
                  <input type="password" class="form-control" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Rol</label>
                  <select name="" id="" class="form-control" required>
                    <option value="">ADMINISTRADOR</option>
                    <option value="">CLIENTE</option>
                  </select>
                </div>
              </div>
            </div>
            <hr style="border-top: 1px solid #007bff;">
            <div class="row">
               <div class="col-md-12">
                  <a href="" class="btn btn-secondary">Cancelar</a>
                  <input type="submit" class="btn btn-primary" value="Registrar">
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
?>



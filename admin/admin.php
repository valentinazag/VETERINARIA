<?php 
include('../app/config.php');
include('../admin/layout/part1.php');
include('../app/controllers/usuarios/listado_users.php');
include('../app/controllers/productos/listado_produ.php');
include('../app/controllers/servicios/listado_ser.php');
?>
<br>
<h2>Bienvenido al sistema - <?php echo $cargo_session ?></h2>
<hr>
<div class="container-fluid">
<div class="row">   
    <div class="col-lg-3 col-6">
      <div class="small-box bg-primary">
        <div class="inner">
          <?php 
          $contador = 0;
          foreach($usuarios as $usuario){
              $contador = $contador + 1;
          }?>
          <h3><?php echo $contador ?></h3>
          <p>Usuarios Registrados</p>
        </div>
        <div class="icon">
          <i class="fas fa-user-plus"></i>
        </div>
        <a href="usuarios/usuarios.php" class="small-box-footer">
          Más información <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="small-box bg-warning">
        <div class="inner">
          <?php 
          $contador_p = 0;
          foreach($productos as $producto){
              $contador_p = $contador_p + 1;
          }?>
          <h3><?php echo $contador_p ?></h3>
          <p>Productos Registrados</p>
        </div>
        <div class="icon">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <a href="productos/productos.php" class="small-box-footer">
          Más información <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="small-box bg-success">
        <div class="inner">
          <?php 
          $contador_s = 0;
          foreach($servicios as $servicio){
              $contador_s = $contador_s + 1;
          }?>
          <h3><?php echo $contador_s ?></h3>
          <p>Servicios Registrados</p>
        </div>
        <div class="icon">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <a href="servicios/servicios.php" class="small-box-footer">
          Más información <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>


  </div> 
</div>
<?php 
include('../admin/layout/part2.php');
?>



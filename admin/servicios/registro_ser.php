<?php 
include('../../app/config.php');
include('../../admin/layout/part1.php');
include('../../app/controllers/servicios/listado_ser.php');

$contador = 1;
foreach($servicios as $servicio){
  $contador = $contador + 1;

  if (!function_exists('ceros')) {
    function ceros($numero) {
        $cantidad_ceros = 5;
        $aux = $numero;
        $pos = strlen($numero);
        $len = $cantidad_ceros - $pos;
        for ($i = 0; $i < $len; $i++) {
            $aux = "0" . $aux;
        }
        return $aux;
    }
  }
}
?>

<head>
  <link rel="stylesheet" href="../../public/css/registro.css">
</head>

<div class="container-fluid">
  <h1>Creación de servicios</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-primary carta">
        <div class="card-header">
          <h3 class="card-title"><b>Datos del servicio</b></h3>
        </div>            
        <div class="card-body">
          <form action="../../app/controllers/servicios/crear_ser.php" method="POST">
            <div class="row">
              <div class="col-md-3">
              <div class="form-group">
                      <label for="">Código</label><b>*</b>
                      <input type="text"  name ="codigo" class="form-control" value="P-<?= ceros($contador)?>" disabled>
                      <input type="text"  name ="codigo" class="form-control" value="P-<?= ceros($contador)?>" hidden>
                    </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Nombre del servicio</label><b>*</b>
                  <input type="text" name="nombre_servicio" class="form-control" required>
                </div>
              </div>
              <div class="col-md-5">
                <div class="form-group">
                  <label for="">Descripción</label><b>*</b>
                  <input type="text" name="descripcion_servicio" class="form-control" required>
                </div>
              </div>
            </div>

            <!-- Segunda fila -->
            <div class="row mt-3">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="">Valor</label><b>*</b>
                  <input type="number" name="valor" class="form-control" required>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="">Fecha de creación</label><b>*</b>
                  <input type="date" name="fecha_creacion" class="form-control" required>
                </div>
              </div>
            </div>

            <hr style="border-top: 1px solid #007bff;">

            <div class="row">
              <div class="col-md-12">
                <a href="../../admin/servicios/servicios.php" class="btn btn-secondary">Cancelar</a>
                <input type="submit" class="btn btn-primary" value="Registrar">
              </div>
            </div>
          </form>
        </div> 
      </div> <!-- card -->
    </div> 
  </div> 
</div>  

<?php 
include('../../admin/layout/part2.php');
include('../../admin/layout/mensaje.php');
?>

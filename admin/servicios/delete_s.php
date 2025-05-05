<?php 
include('../../app/config.php');
include('../../admin/layout/part1.php');
$id_servicio = $_GET['id_servicio'];
include('../../app/controllers/servicios/datos_ser.php');
?>

<link rel="stylesheet" href="../../public/css/registro.css">

<div class="container-fluid">
  <h1>Eliminar servicio</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-danger carta">
        <div class="card-header">
          <h3 class="card-title"><b>¿Está seguro de eliminar este producto?</b></h3>
        </div>            
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="">Código</label>
                    <input type="text" name="codigo_s" class="form-control" value="<?php echo $codigo_s ?>" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Nombre del servicio</label>
                    <input type="text" name="nombre_servicio" class="form-control" value="<?php echo $nombre_servicio ?>" disabled>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="">Descripción</label>
                    <input type="text" name="descripcion_servicio" class="form-control" value="<?php echo $descripcion_servicio ?>" disabled>
                  </div>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="">Valor</label>
                    <input type="number" name="valor" class="form-control" value="<?php echo $valor ?>" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Fecha de creación</label>
                    <input type="text" name="fecha_creacion" class="form-control" value="<?php echo $fecha_creacion ?>" disabled style="min-width: 180px;">
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <hr style="border-top: 1px solid #d9534f;">

          <div class="row">
            <div class="col-md-12">
            <a href="<?php echo $URL.'/admin/servicios/vista_s.php?id_servicio='.$id_servicio?>" class="btn btn-secondary">Cancelar</a>
              <a href="../../app/controllers/servicios/estado/desactivar_ser.php?id_servicio=<?php echo $id_servicio; ?>" class="btn btn-danger text-white">
                <i class="bi bi-trash"></i> Eliminar
              </a>
            </div>
          </div>
        </div> 
      </div> 
    </div> 
  </div> 
</div>  

<?php 
include('../../admin/layout/part2.php');
include('../../admin/layout/mensaje.php');
?>
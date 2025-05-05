<?php 
include('../../app/config.php');
include('../../admin/layout/part1.php');
$id_servicio = $_GET['id_servicio'];
include('../../app/controllers/servicios/datos_ser.php');
?>
<head>
<link rel="stylesheet" href="../../public/css/registro.css">
</head>
<div class="container-fluid">
  <h1>Actualización de servicio</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-success carta">
        <div class="card-header">
          <h3 class="card-title"><b>Datos del servicio</b></h3>
        </div>            
        <div class="card-body">
          <form action="../../app/controllers/servicios/actualizar_ser.php" method="POST"  enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-9">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Código</label><b>*</b>
                      <input type="text"  name ="codigo" class="form-control" value="<?php echo $codigo_s;?>" disabled>
                      <input type="text"  name ="codigo" class="form-control" value="<?php echo $codigo_s;?>" hidden>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Nombre del servicio</label><b>*</b>
                      <input type="text" name ="nombre_servicio" value="<?php echo $nombre_servicio;?>" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="">Descripción</label>
                      <input type="text" name ="descripcion_servicio" value="<?php echo $descripcion_servicio;?>" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                  <label for="">Valor</label>*
                  <input type="number" name="valor" class="form-control" value="<?php echo $valor ?>" >
                  </div>
                </div>
              </div>
              </div>
            <!-- sgunda fila-->
            <div class="row mt-3">
              <div class="col-md-3">
                  </div>
                  </div>
                </div>
                <input type="text" name="id_servicio" value="<?php echo $id_servicio; ?>" hidden>
                   <hr style="border-top: 1px solid #198754;">
                         <div class="row">
                  <div class="col-md-12">
                <a href="<?php echo $URL.'/admin/servicios/vista_s.php?id_servicio='.$id_servicio?>" class="btn btn-secondary">Cancelar</a>
                <input type="submit" class="btn btn-success" value="Actualizar servicio">
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


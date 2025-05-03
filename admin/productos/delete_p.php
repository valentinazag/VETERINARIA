<?php 
include('../../app/config.php');
include('../../admin/layout/part1.php');
$id_producto = $_GET['id_producto'];
include('../../app/controllers/productos/datos_productos.php');

?>
<head>
<link rel="stylesheet" href="../../public/css/registro.css">
</head>
<div class="container-fluid">
  <h1>Eliminar producto</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-danger carta">
        <div class="card-header">
          <h3 class="card-title"><b>¿Esta seguro de eliminar este producto?</b></h3>
        </div>            
        <div class="card-body">
            <div class="row">
              <div class="col-md-9">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Código</label>
                      <input type="text"  name ="codigo" class="form-control" value="<?php echo $codigo?>" disabled>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Nombre del Producto</label>
                      <input type="text" name ="nombre_producto" class="form-control"value="<?php echo $nombre_producto?>" disabled>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="">Descripción</label>
                      <input type="text" name ="descripcion" class="form-control" value="<?php echo $descripcion?>" disabled>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="">Imagen</label>
                  <br>
                  <img src="<?php echo $URL."/public/images/productos/".$imagen?>" alt="" width="150px">
                </div>
              </div>
            </div>

            <!-- sgunda fila-->
            <div class="row mt-3">
              <div class="col-md-2">
                <div class="form-group">
                  <label for="">Stock</label>
                  <input type="number" name ="stock" class="form-control" value="<?php echo $stock?>" disabled>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="">Stock mínimo</label>
                  <input type="number" name ="stock_min" class="form-control" value="<?php echo $stock_min?>" disabled>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="">Stock máximo</label>
                  <input type="number" name ="stock_max" class="form-control" value="<?php echo $stock_max?>" disabled>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="">Precio de compra</label>
                  <input type="number" name ="precio_compra" class="form-control" value="<?php echo $precio_compra?>" disabled>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="">Precio de venta</label>
                  <input type="number" name ="precio_venta" class="form-control" value="<?php echo $precio_venta?>" disabled>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="">Fecha de ingreso</label>
                  <input type="text" name ="fecha_ingreso" class="form-control" value="<?php echo $fecha_ingreso?>" disabled>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                  <label for="">Usuario de registro</label>
                  <input type="text" name ="id_usuario" class="form-control" value="<?php echo $nombre_completo?>" disabled>
                </div>
              </div>
            </div>
            <input type="text" name="id_usuario" value="<?php echo $id_usuario?>" hidden>
            <hr style="border-top: 1px solid #d9534f;">
            <div class="row">
            <a href="<?php echo $URL.'/admin/productos/vista_p.php?id_producto='.$id_producto?>" class="btn btn-secondary">Cancelar</a>
            <a href="../../app/controllers/productos/estado/desactivar_produ.php?id_producto=<?php echo $id_producto;?>" class="btn btn-danger text-white">
            <i class="bi bi-trash"></i> Eliminar
            </a>
         </div>
        </div> 
      </div> <!-- card -->
    </div> 
  </div> 
</div>  
<?php 
include('../../admin/layout/part2.php');
include('../../admin/layout/mensaje.php');
?>



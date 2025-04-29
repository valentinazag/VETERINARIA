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
  <h1>Actualización de producto</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-success carta">
        <div class="card-header">
          <h3 class="card-title"><b>Datos del Producto</b></h3>
        </div>            
        <div class="card-body">
          <form action="../../app/controllers/productos/actualizar_produ.php" method="POST"  enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-9">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Código</label><b>*</b>
                      <input type="text"  name ="codigo" class="form-control" value="<?php echo $codigo;?>" disabled>
                      <input type="text"  name ="codigo" class="form-control" value="<?php echo $codigo;?>" hidden>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Nombre del Producto</label><b>*</b>
                      <input type="text" name ="nombre_producto" value="<?php echo $nombre_producto;?>" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="">Descripción</label>
                      <input type="text" name ="descripcion" value="<?php echo $descripcion;?>" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="">Imagen</label>
                  <input type="file" name ="imagen" class="form-control" id="file">
                  <br>
                  <output id="list"> <img src="<?php echo $URL."/public/images/productos/".$imagen?>" alt="" width="60%"></output>
                </div>
              </div>
            </div>

            <!-- sgunda fila-->
            <div class="row mt-3">
              <div class="col-md-2">
                <div class="form-group">
                  <label for="">Stock</label><b>*</b>
                  <input type="number" name ="stock" value="<?php echo $stock;?>" class="form-control" required>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="">Stock mínimo</label><b>*</b>
                  <input type="number" name ="stock_min"  value="<?php echo $stock_min;?>" class="form-control" required>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="">Stock máximo</label><b>*</b>
                  <input type="number" name ="stock_max" value="<?php echo $stock_max;?>" class="form-control" required>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="">Precio de compra</label><b>*</b>
                  <input type="number" name ="precio_compra" value="<?php echo $precio_compra;?>" class="form-control" required>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="">Precio de venta</label><b>*</b>
                  <input type="number" name ="precio_venta" value="<?php echo $precio_venta;?>" class="form-control" required>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="">Fecha de ingreso</label><b>*</b>
                  <input type="date" name ="fecha_ingreso" value="<?php echo $fecha_ingreso;?>" class="form-control" required>
                </div>
              </div>
            </div>
            <input type="text" name="id_producto" value="<?php echo $id_producto; ?>" hidden>
            <input type="text" name="imagen" value="<?php echo $imagen; ?>" hidden>
            <hr style="border-top: 1px solid #198754;">
            <div class="row">
              <div class="col-md-12">
                <a href="<?php echo $URL.'/admin/productos/vista_p.php?id_producto='.$id_producto?>" class="btn btn-secondary">Cancelar</a>
                <input type="submit" class="btn btn-success" value="Actualizar producto">
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

<script> //script para previzualisar la imgnen
    function arquivo(evt){
    var files = evt.target.files;
    for(var i = 0, f; f = files[i]; i++) {
        if(!f.type.match('image.*')) {
            continue;
        }
        var reader = new FileReader();
        reader.onload = (function(theFile){
            return function(e){
                document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result, '" width="50%" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);
        reader.readAsDataURL(f);
    }
}
document.getElementById("file").addEventListener('change', arquivo, false);

</script>


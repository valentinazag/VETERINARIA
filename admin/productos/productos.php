<?php 
include('../../app/config.php');
include('../../admin/layout/part1.php');
include('../../app/controllers/productos/listado_produ.php');

?>
<br>
 
<div class="container-fluid">
    <h1>
        Listado Productos
    </h1>
    <div class="text-end mb-2" id="btnEliminarSeleccionados" style="display:none; margin-left: 80% ">
    <form id="formEliminarSeleccionados" action="../../app/controllers/productos/seleccionados/desactivar_seleccionados_p.php" method="POST">
        <input type="hidden" name="ids_seleccionados" id="ids_seleccionados">
        <button type="submit" class="btn btn-danger">
        Eliminar seleccionados
        </button>
    </form>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Productos registrados</b></h3>
                </div>            
                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                            <th><input type="checkbox" id="select_all"></th>
                                <th>Nro</th>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Imagen</th>
                                <th>Stock</th>
                                <th>Precio de compra</th>
                                <th>Precio de venta</th>
                                <th>Fecha de ingreso</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $contador = 0;
                            foreach($productos as $producto){
                                $contador = $contador +1;
                                $id_producto = $producto['id_producto'];
                                ?>
                                <tr>
                                <td><input type="checkbox" class="select-item" name="id_productos[]" value="<?php echo $id_producto; ?>"></td>
                                    <td><?php echo $contador?></td>
                                    <td><?php echo $producto['codigo']?></td>
                                    <td><?php echo $producto['nombre_producto']?></td>
                                    <td><?php echo $producto['descripcion']?></td>
                                    <td>
                                    <img src="../../../public/images/productos/<?php echo $producto['imagen']?>" alt="" width="90px">

                                    </td>
                                    <td><?php echo $producto['stock']?></td>
                                    <td><?php echo $producto['precio_compra']?></td>
                                    <td><?php echo $producto['precio_venta']?></td>
                                    <td><?php echo $producto['fecha_ingreso']?></td>
                                    <td>                                       
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <a href="vista_p.php?id_producto=<?php echo $id_producto;?>" class="btn btn-info text-white">
                                        <i class="bi bi-eye"></i> Ver
                                    </a>
                                    <a href="stock_p.php?id_producto=<?php echo $id_producto;?>" class="btn btn text-white" style= "background-color: #6f42c1";>
                                        <i class="bi bi-eye"></i> Stock
                                    </a>
                                    <a href="update_p.php?id_producto=<?php echo $id_producto;?>" class="btn btn-success text-white">
                                        <i class="bi bi-pencil"></i> Editar
                                    </a>
                                    <a href="delete_p.php?id_producto=<?php echo $id_producto;?>" class="btn btn-danger text-white">
                                        <i class="bi bi-trash"></i> Eliminar
                                    </a>
                                </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../../public/js/listados.js"></script>
<?php 
include('../../admin/layout/part2.php');
include('../../admin/layout/mensaje.php');
?>



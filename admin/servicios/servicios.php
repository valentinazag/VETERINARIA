<?php 
include('../../app/config.php');
include('../../admin/layout/part1.php');
include('../../app/controllers/servicios/listado_ser.php');

?>
<br>
 
<div class="container-fluid">
    <h1>
        Listado Servicios
    </h1>
    <div class="text-end mb-2" id="btnEliminarSeleccionados" style="display:none; margin-left: 80% ">
    <form id="formEliminarSeleccionados" action="../../app/controllers/servicios/seleccionados/desactivar_seleccionados_s.php" method="POST">
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
                    <h3 class="card-title"><b>Servicios registrados</b></h3>
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
                                <th>Valor</th>
                                <th>Fecha de creación</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $contador = 0;
                            foreach($servicios as $servicio){
                                $contador = $contador +1;
                                $id_servicio = $servicio['id_servicio'];
                                ?>
                                <tr>
                                <td><input type="checkbox" class="select-item" name="id_servicios[]" value="<?php echo $id_servicio; ?>"></td>
                                    <td><?php echo $contador?></td>
                                    <td><?php echo $servicio['codigo_s']?></td>
                                    <td><?php echo $servicio['nombre_servicio']?></td>
                                    <td><?php echo $servicio['descripcion_servicio']?></td>
                                    <td><?php echo $servicio['valor']?></td>
                                    <td><?php echo $servicio['fyh_creacion']?></td>   
                                    <td>                                       
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <a href="vista_s.php?id_servicio=<?php echo $id_servicio;?>" class="btn btn-info text-white">
                                        <i class="bi bi-eye"></i> Ver
                                    </a>
                                    <a href="update_s.php?id_servicio=<?php echo $id_servicio;?>" class="btn btn-success text-white">
                                        <i class="bi bi-pencil"></i> Editar
                                    </a>
                                    <a href="delete_s.php?id_servicio=<?php echo $id_servicio;?>" class="btn btn-danger text-white">
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



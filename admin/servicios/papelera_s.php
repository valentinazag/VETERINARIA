<?php 
include('../../app/config.php');
include('../../admin/layout/part1.php');
include('../../app/controllers/servicios/eliminados_ser.php');

?>
<br>
 
<div class="container-fluid">
    <h1>
        Papelera de servicios
    </h1>
    <div class="row">
    <div class="text-end mb-2" id="btnEliminarSeleccionados" style="display:none; margin-left:70%">
        <div class="d-flex justify-content-end gap-2">
        <form id="formEliminarSeleccionados" action="../../app/controllers/servicios/seleccionados/eliminar_seleccionados_s.php" method="POST">
    <input type="hidden" name="ids_seleccionados" id="ids_seleccionados_eliminar">
    <button type="submit" class="btn btn-danger">
        Eliminar definitivamente
    </button>
</form>

<form id="formRestaurarSeleccionados" action="../../app/controllers/servicios/seleccionados/restaurar_seleccionados_s.php" method="POST">
    <input type="hidden" name="ids_seleccionados" id="ids_seleccionados_restaurar">
    <button type="submit" class="btn btn-success" style="margin-left: 5%;">
        Restaurar
    </button>
</form>
</div>
</div>
</div> 
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-warning">
                <div class="card-header">
                    <h3 class="card-title"><b>Servicios registrados</b></h3>
                </div>            
                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
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
                                    <div class="col-md-12">
                                        <div class="row">
                                         <a href="../../app/controllers/servicios/estado/restaurar_ser.php?id_servicio=<?php echo $id_servicio;?>" class="btn btn-success text-white">
                                         Restaurar
                                         </a>
                                         <a href="../../app/controllers/servicios/eliminar_ser.php?id_servicio=<?php echo $id_servicio;?>" class="btn btn-danger text-white">
                                         Eliminar definitivamente
                                         </a>
                                        </div>
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
<script src="../../public/js/papelera.js"></script>
<?php 
include('../../admin/layout/part2.php');
include('../../admin/layout/mensaje.php');
?>



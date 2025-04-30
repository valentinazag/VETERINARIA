<?php 
include('../../app/config.php');
include('../../admin/layout/part1.php');
include('../../app/controllers/usuarios/eliminados_u.php')

?>
<br>
 
<div class="container-fluid">
    <h1>
        Papelera de usuarios
    </h1>
    <div class="row">
    <div class="text-end mb-2" id="btnEliminarSeleccionados" style="display:none; margin-left:70%">
    <div class="d-flex justify-content-end gap-2">
        <form id="formEliminarSeleccionados" action="../../app/controllers/usuarios/seleccionados/eliminar_seleccionados_u.php" method="POST">
    <input type="hidden" name="ids_seleccionados" id="ids_seleccionados_eliminar">
    <button type="submit" class="btn btn-danger">
        Eliminar definitivamente
    </button>
</form>

<form id="formRestaurarSeleccionados" action="../../app/controllers/usuarios/seleccionados/restaurar_seleccionados_u.php" method="POST">
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
                    <h3 class="card-title"><b>Usuarios registrados</b></h3>
                </div>            
                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                            <th><input type="checkbox" id="select_all"></th>
                                <th>Nro</th>
                                <th>Nombre completo</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Cargo</th>
                                <th>Fecha de alta</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $contador = 0;
                             foreach($usuarios as $usuario){ 
                                $contador = $contador +1;
                                $id_usuario = $usuario['id_user'];
                                ?>
                                <tr>
                                <td><input type="checkbox" class="select-item" name="id_usuarios[]" value="<?php echo $id_usuario; ?>"></td>
                                    <td><?php echo $contador?></td>
                                    <td><?php echo $usuario['nombre_completo']?></td>
                                    <td><?php echo $usuario['email']?></td>
                                    <td><?php echo $usuario['celular']?></td>
                                    <td><?php echo $usuario['cargo']?></td>
                                    <td><?php echo $usuario['fyh_creacion']?></td>
                                    <td>                                       
                                    <div class="col-md-12">
                                        <div class="row">
                                         <a href="../../app/controllers/usuarios/estado/restaurar_u.php?id_usuario=<?php echo $id_usuario;?>" class="btn btn-success text-white">
                                         Restaurar
                                         </a>
                                         
                                         <a href="../../app/controllers/usuarios/eliminar_u.php?id_usuario=<?php echo $id_usuario;?>" class="btn btn-danger text-white">
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



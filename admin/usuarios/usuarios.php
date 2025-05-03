<?php 
include('../../app/config.php');
include('../../admin/layout/part1.php');
include('../../app/controllers/usuarios/listado_users.php');

?>
<br>
 
<div class="container-fluid">
    <h1>
        Listado Usuarios
    </h1>
    <div class="text-end mb-2" id="btnEliminarSeleccionados" style="display:none; margin-left: 80%">
    <form id="formEliminarSeleccionados" action="../../app/controllers/usuarios/seleccionados/desactivar_seleccionados_u.php" method="POST">
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
                                <td>
                                <?php if ($id_usuario != $id_session) { ?>
                                <input type="checkbox" class="select-item" name="id_usuarios[]" value="<?php echo $id_usuario; ?>">
                                <?php } ?>
                                </td>
                                    <td><?php echo $contador?></td>
                                    <td><?php echo $usuario['nombre_completo']?></td>
                                    <td><?php echo $usuario['email']?></td>
                                    <td><?php echo $usuario['celular']?></td>
                                    <td><?php echo $usuario['cargo']?></td>
                                    <td><?php echo $usuario['fyh_creacion']?></td>
                                    <td>                                       
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <a href="vista.php?id_usuario=<?php echo $id_usuario;?>" class="btn btn-info text-white">
                                        <i class="bi bi-eye"></i> Ver
                                    </a>
                                    <a href="update.php?id_usuario=<?php echo $id_usuario;?>" class="btn btn-success text-white">
                                        <i class="bi bi-pencil"></i> Editar
                                    </a>
                                    <?php if ($id_usuario != $id_session) { ?>
                                    <a href="delete.php?id_usuario=<?php echo $id_usuario;?>" class="btn btn-danger text-white">
                                    <i class="bi bi-trash"></i> Eliminar
                                    </a>
                                    <?php } ?>
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



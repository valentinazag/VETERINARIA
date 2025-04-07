<?php 
include('../../app/config.php');
include('../../admin/layout/part1.php');
include('../../app/controllers/usuarios/listado_users.php')

?>
<br>
 
<div class="container-fluid">
    <h1>
        Listado Usuarios
    </h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Usuarios registrados</b></h3>
                </div>            
                <div class="card-body">
                    <table class="table table-resposive table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre completo</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                foreach($usuarios as $usuario){
                                    ?>    
                                    <td><?php echo $usuario['id_user']?></td>
                                    <td><?php echo $usuario['nombre_completo']?></td>
                                    <td><?php echo $usuario['email']?></td>
                                    <td><?php echo $usuario['celular']?></td>
                                    <td><?php echo $usuario['rol']?></td>
                                    <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <button type="button" class="btn btn-success">Editar</button>
                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                    </div>
                                    </td>
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
 
<?php 
include('../../admin/layout/part2.php');
?>



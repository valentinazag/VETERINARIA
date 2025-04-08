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
                    <table id="example1" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
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
                                    <a href="delete.php?id_usuario=<?php echo $id_usuario;?>" class="btn btn-danger text-white">
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
<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                "infoFiltered": "(Filtrado de MAX total Usuarios",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Usuarios",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
            buttons: [
                {
                    extend: "collection",
                    text: "Reportes",
                    orientation: "landscape",
                    buttons: [
                        { text: "Copiar", extend: "copy"}, 
                        { extend: "pdf" }, 
                        { extend: "csv" }, 
                        { extend: "excel" }, 
                        { text: "Imprimir", extend: "print"}
                    ]
                },
                {
                    extend: "colvis",
                    text: "Visor de columnas",
                    /* collectionLayout: "fixed three-column" */

                }
            ],
        }).buttons().container().appendTo("#example1_wrapper .col-md-6:eq(0)");
    });
</script>
<?php 
include('../../admin/layout/part2.php');
include('../../admin/layout/mensaje.php');
?>



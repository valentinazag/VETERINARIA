<?php 
include('../../app/config.php');
include('../../admin/layout/part1.php');
include('../../app/controllers/productos/eliminados_produ.php');

?>
<br>
 
<div class="container-fluid">
    <h1>
        Papelera de productos
    </h1>
    <div class="row">
        <div class="text-end mb-2" id="btnEliminarSeleccionados" style="display:none;">
        <form id="formEliminarSeleccionados" action="../../app/controllers/productos/seleccionados/eliminar_seleccionados_p.php" method="POST">
    <input type="hidden" name="ids_seleccionados" id="ids_seleccionados_eliminar">
    <button type="submit" class="btn btn-danger">
        Eliminar definitivamente
    </button>
</form>

<form id="formRestaurarSeleccionados" action="../../app/controllers/productos/seleccionados/restaurar_seleccionados_p.php" method="POST">
    <input type="hidden" name="ids_seleccionados" id="ids_seleccionados_restaurar">
    <button type="submit" class="btn btn-success">
        Restaurar
    </button>
</form>
    </div>
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
                                    <div class="col-md-12">
                                        <div class="row">
                                         <a href="../../app/controllers/productos/estado/restaurar_produ.php?id_producto=<?php echo $id_producto;?>" class="btn btn-success text-white">
                                         <i class="bi bi-pencil"></i> Restaurar
                                         </a>
                                         <a href="../../app/controllers/productos/eliminar_produ.php?id_producto=<?php echo $id_producto;?>" class="btn btn-danger text-white">
                                         <i class="bi bi-trash"></i> Eliminar definitivamente
                                         </a>
                                </div></div>
                                     
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
<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Productos",
                "infoEmpty": "Mostrando 0 a 0 de 0 Productos",
                "infoFiltered": "(Filtrado de MAX total Productos",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Productos",
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

<script>
$(document).ready(function() {
    $('#select_all').click(function() {
        $('.select-item').prop('checked', this.checked);
        toggleEliminarButton();
    });

    $('.select-item').change(function() {
        if ($('.select-item:checked').length == $('.select-item').length) {
            $('#select_all').prop('checked', true);
        } else {
            $('#select_all').prop('checked', false);
        }
        toggleEliminarButton();
    });

    function toggleEliminarButton() {
        if ($('.select-item:checked').length > 0) {
            $('#btnEliminarSeleccionados').show();
        } else {
            $('#btnEliminarSeleccionados').hide();
        }
    }

    // Función que llena los inputs ocultos de ambos formularios
    function actualizarInputsSeleccionados() {
        var selected = [];
        $('.select-item:checked').each(function() {
            selected.push($(this).val());
        });
        $('#ids_seleccionados_eliminar').val(selected.join(','));
        $('#ids_seleccionados_restaurar').val(selected.join(','));
    }

    // Modificamos los submit de los dos formularios
    $('#formEliminarSeleccionados').submit(function(e) {
        e.preventDefault();
        actualizarInputsSeleccionados();
        this.submit();
    });

    $('#formRestaurarSeleccionados').submit(function(e) {
        e.preventDefault();
        actualizarInputsSeleccionados();
        this.submit();
    });
});
</script>
<?php 
include('../../admin/layout/part2.php');
include('../../admin/layout/mensaje.php');
?>



<?php
include("../../../app/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $agregar = (int) $_POST['agregar_stock'];
    $sacar = (int) $_POST['sacar_stock'];
    $id_producto = $_POST['id_producto'];
 
    $sql = "SELECT stock FROM productos WHERE id_producto = :id_producto";
    $sentencia = $pdo->prepare($sql);
    $sentencia->bindParam(':id_producto', $id_producto);
    $sentencia->execute();
    $producto = $sentencia->fetch(PDO::FETCH_ASSOC);

    if ($producto) 
    {
        $stock_actual = (int) $producto['stock'];
        $diferencia = $agregar - $sacar;
        $stock_nuevo = $stock_actual + $diferencia;
 
        $sql_update = "UPDATE productos SET stock = :stock, fyh_actualizacion = :fyh_actualizacion WHERE id_producto = :id_producto";
        $sentencia_update = $pdo->prepare($sql_update);
        $sentencia_update->bindParam(':stock', $stock_nuevo);
        $sentencia_update->bindParam(':fyh_actualizacion', $fecha);
        $sentencia_update->bindParam(':id_producto', $id_producto);

        if ($sentencia_update->execute())
        {
        
            session_start();
            $_SESSION['mensaje'] = "Actualización de stock exitosa";
            $_SESSION['icono'] = "success";
            header('Location:'.$URL.'/admin/productos/vista_p.php?id_producto='.$id_producto);
        }
        else
        {
            session_start();
            $_SESSION['mensaje'] = "Error al actualizar el stock ";
            $_SESSION['icono'] = "error";
            header('Location:'.$URL.'/admin/productos/vista_p.php?id_producto='.$id_producto);
        }
    }
}

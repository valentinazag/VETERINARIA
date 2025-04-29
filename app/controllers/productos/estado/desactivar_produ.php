<?php

include('../../../config.php');

$id_producto = $_GET['id_producto'];
$estado = "desactivado";


$sentencia = $pdo->prepare("UPDATE productos 
SET estado =:estado
WHERE id_producto=:id_producto");
$sentencia->bindParam(':estado', $estado);
$sentencia->bindParam(':id_producto', $id_producto);


if($sentencia->execute())
        {
            session_start();
            $_SESSION['mensaje'] = "Producto eliminado exitosamente";
            $_SESSION['icono'] = "success";
            header('Location:'.$URL.'/admin/productos/productos.php');
        }
    else
        {
            session_start();
            $_SESSION['mensaje'] = "Error al eliminar ";
            $_SESSION['icono'] = "error";
            header('Location:'.$URL.'/admin/productos/papelera_p.php');
        }










?>
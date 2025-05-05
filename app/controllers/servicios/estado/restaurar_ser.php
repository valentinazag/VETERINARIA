<?php

include('../../../config.php');



$id_servicio = $_GET['id_servicio'];
$estado = "activo";

$sentencia = $pdo->prepare("UPDATE servicios 
SET estado =:estado
WHERE id_servicio=:id_servicio");
$sentencia->bindParam(':estado', $estado);
$sentencia->bindParam(':id_servicio', $id_servicio);


if($sentencia->execute())
        {
            session_start();
            $_SESSION['mensaje'] = "Restauracion de servicio exitosa";
            $_SESSION['icono'] = "success";
            header('Location:'.$URL.'/admin/servicios/papelera_s.php');
        }
    else
        {
            session_start();
            $_SESSION['mensaje'] = "Error al restaurar ";
            $_SESSION['icono'] = "error";
            header('Location:'.$URL.'/admin/servicios/papelera_s.php');
        }



?>
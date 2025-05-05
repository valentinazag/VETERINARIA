<?php
include("../../../app/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$nombre_servicio = $_POST['nombre_servicio'];
$descripcion_servicio = $_POST['descripcion_servicio'];
$valor = $_POST['valor'];
$fecha_creacion = $_POST['fyh_creacion'];
$id_servicio = $_POST['id_servicio'];

$sentencia = $pdo->prepare("UPDATE servicios 
SET nombre_servicio=:nombre_servicio,
descripcion_servicio=:descripcion_servicio,
valor=:valor,
fyh_actualizacion=:fyh_actualizacion
WHERE id_servicio=:id_servicio");
$sentencia->bindParam(':nombre_servicio', $nombre_servicio);
$sentencia->bindParam(':descripcion_servicio', $descripcion_servicio);
$sentencia->bindParam(':valor', $valor);
$sentencia->bindParam(':fyh_actualizacion', $fecha);
$sentencia->bindParam(':id_servicio', $id_servicio);

if($sentencia->execute())
        {
            session_start();
            $_SESSION['mensaje'] = "Actualización de servicio exitosa";
            $_SESSION['icono'] = "success";
            header('Location:'.$URL.'/admin/servicios/vista_s.php?id_servicio='.$id_servicio);
        }
    else
        {
            session_start();
            $_SESSION['mensaje'] = "Error al actualizar ";
            $_SESSION['icono'] = "error";
            header('Location:'.$URL.'/admin/servicios/vista_s.php?id_servicio='.$id_servicio);
        }
}


?>
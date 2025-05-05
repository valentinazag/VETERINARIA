<?php
include("../../../app/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $nombre_servicio = $_POST['nombre_servicio'];
    $descripcion_servicio = $_POST['descripcion_servicio'];
    $valor = $_POST['valor'];
    $fecha_creacion = $_POST['fecha_creacion'];
    $codigo_s = $_POST['codigo'];


$sentencia = $pdo->prepare('INSERT INTO servicios
(codigo_s,nombre_servicio,descripcion_servicio,valor,fyh_creacion)
VALUES ( :codigo_s,:nombre_servicio,:descripcion_servicio,:valor,:fyh_creacion)');


$sentencia->bindParam(':codigo_s',$codigo_s);
$sentencia->bindParam(':nombre_servicio', $nombre_servicio);
$sentencia->bindParam(':descripcion_servicio', $descripcion_servicio);
$sentencia->bindParam(':valor', $valor);
$sentencia->bindParam(':fyh_creacion',$fecha_creacion);




if ($sentencia->execute())
            {
                session_start();
                $_SESSION['mensaje'] = "Registro de servicio exitoso";
                $_SESSION['icono'] = "success";
             header('Location:'.$URL.'/admin/servicios/servicios.php');
            }else{
                session_start();
                $_SESSION['mensaje'] = "Error al registrar servicio";
                $_SESSION['icono'] = "error";
                header('Location:'.$URL.'/admin/servicios/registro_ser.php');
            }
}
?>
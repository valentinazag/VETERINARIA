<?php
include("../../../../app/config.php");

$ids_seleccionados = $_POST['ids_seleccionados'];
$array_ids = explode(',', $ids_seleccionados);

$estado = "activo";

foreach($array_ids as $id_servicio) {
    $sentencia = $pdo->prepare("UPDATE servicios SET estado = :estado WHERE id_servicio = :id_servicio");
    $sentencia->bindParam(':estado', $estado);
    $sentencia->bindParam(':id_servicio', $id_servicio);
    $sentencia->execute();
}

session_start();
$_SESSION['mensaje'] = "Servicios restaurados exitosamente";
$_SESSION['icono'] = "success";
header('Location: '.$URL.'/admin/servicios/servicios.php');
?>
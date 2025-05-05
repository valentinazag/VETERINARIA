<?php
include("../../../../app/config.php");

$ids_seleccionados = $_POST['ids_seleccionados'];
$array_ids = explode(',', $ids_seleccionados);

foreach($array_ids as $id_servicio) {
    $sentencia = $pdo->prepare("DELETE FROM servicios WHERE id_servicio = :id_servicio");
    $sentencia->bindParam(':id_servicio', $id_servicio);
    $sentencia->execute();
}

session_start();
$_SESSION['mensaje'] = "Servicios eliminados definitivamente.";
$_SESSION['icono'] = "success";

header('Location: '.$URL.'/admin/servicios/papelera_s.php');
exit;
?>
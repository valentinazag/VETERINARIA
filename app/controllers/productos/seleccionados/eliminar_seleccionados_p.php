<?php
include("../../../../app/config.php");

$ids_seleccionados = $_POST['ids_seleccionados'];
$array_ids = explode(',', $ids_seleccionados);

foreach($array_ids as $id_producto) {
    $sentencia = $pdo->prepare("DELETE FROM productos WHERE id_producto = :id_producto");
    $sentencia->bindParam(':id_producto', $id_producto);
    $sentencia->execute();
}

session_start();
$_SESSION['mensaje'] = "Productos eliminados definitivamente.";
$_SESSION['icono'] = "success";

header('Location: '.$URL.'/admin/productos/papelera_p.php');
exit;
?>
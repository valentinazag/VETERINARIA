<?php
include("../../../../app/config.php");

$ids_seleccionados = $_POST['ids_seleccionados'];
$array_ids = explode(',', $ids_seleccionados);

$estado = "activo";

foreach($array_ids as $id_producto) {
    $sentencia = $pdo->prepare("UPDATE productos SET estado = :estado WHERE id_producto = :id_producto");
    $sentencia->bindParam(':estado', $estado);
    $sentencia->bindParam(':id_producto', $id_producto);
    $sentencia->execute();
}

session_start();
$_SESSION['mensaje'] = "Productos restaurados exitosamente";
$_SESSION['icono'] = "success";
header('Location: '.$URL.'/admin/productos/productos.php');
?>
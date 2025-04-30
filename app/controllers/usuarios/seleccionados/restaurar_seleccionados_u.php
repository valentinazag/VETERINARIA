<?php
include("../../../../app/config.php");

$ids_seleccionados = $_POST['ids_seleccionados'];
$array_ids = explode(',', $ids_seleccionados);

$estado = "activo";

foreach($array_ids as $id_usuario) {
    $sentencia = $pdo->prepare("UPDATE usuarios SET estado = :estado WHERE id_user = :id_user");
    $sentencia->bindParam(':estado', $estado);
    $sentencia->bindParam(':id_user', $id_usuario);
    $sentencia->execute();
}

session_start();
$_SESSION['mensaje'] = "Usuarios restaurados exitosamente";
$_SESSION['icono'] = "success";
header('Location: '.$URL.'/admin/usuarios/papelera.php');
?>
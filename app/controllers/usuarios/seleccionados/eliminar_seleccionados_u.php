<?php
include("../../../../app/config.php");

$ids_seleccionados = $_POST['ids_seleccionados'];
$array_ids = explode(',', $ids_seleccionados);

foreach($array_ids as $id_usuario) {
    $sentencia = $pdo->prepare("DELETE FROM usuarios WHERE id_user = :id_user");
    $sentencia->bindParam(':id_user', $id_usuario);
    $sentencia->execute();
}

session_start();
$_SESSION['mensaje'] = "Usuarios eliminados definitivamente.";
$_SESSION['icono'] = "success";

header('Location: '.$URL.'/admin/usuarios/papelera.php');
exit;
?>
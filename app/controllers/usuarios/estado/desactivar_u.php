<?php

include('../../../config.php');

$id_usuario_e = $_GET['id_usuario'];
$estado = "desactivado";


$sentencia = $pdo->prepare("UPDATE usuarios 
SET estado =:estado
WHERE id_user=:id_user");
$sentencia->bindParam(':estado', $estado);
$sentencia->bindParam(':id_user', $id_usuario_e);


if($sentencia->execute())
        {
            session_start();
            $_SESSION['mensaje'] = "Usuario eliminado exitosamente";
            $_SESSION['icono'] = "success";
            header('Location:'.$URL.'/admin/usuarios/usuarios.php');
        }
    else
        {
            session_start();
            $_SESSION['mensaje'] = "Error al eliminar ";
            $_SESSION['icono'] = "error";
            header('Location:'.$URL.'/admin/usuarios/papelera.php');
        }










?>
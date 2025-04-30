<?php

include('../../../config.php');

$id_usuario = $_GET['id_usuario'];
$estado = "activo";


$sentencia = $pdo->prepare("UPDATE usuarios 
SET estado =:estado
WHERE id_user=:id_user");
$sentencia->bindParam(':estado', $estado);
$sentencia->bindParam(':id_user', $id_usuario);


if($sentencia->execute())
        {
            session_start();
            $_SESSION['mensaje'] = "Usuario restaurado exitosamente";
            $_SESSION['icono'] = "success";
            header('Location:'.$URL.'/admin/usuarios/papelera.php');
        }
    else
        {
            session_start();
            $_SESSION['mensaje'] = "Error al restaurar ";
            $_SESSION['icono'] = "error";
            header('Location:'.$URL.'/admin/usuarios/papelera.php');
        }










?>
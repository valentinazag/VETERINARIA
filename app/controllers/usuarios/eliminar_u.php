<?php

include("../../../app/config.php");


$id_usuario = $_GET['id_usuario'];


    $sentencia = $pdo->prepare("DELETE FROM usuarios WHERE id_user = '$id_usuario' "); 
            
    //EJECUTAMOS SENTENCIA
            
            if ($sentencia->execute())
            {
                session_start();
                $_SESSION['mensaje'] = "Se elimino correctamente";
                $_SESSION['icono'] = "success";
             header('Location:'.$URL.'/admin/usuarios/papelera.php');
            }else{
                session_start();
                $_SESSION['mensaje'] = "Error al eliminar usuario";
                $_SESSION['icono'] = "error";
                header('Location:'.$URL.'/admin/usuarios/papelera.php');
            
        }








?>
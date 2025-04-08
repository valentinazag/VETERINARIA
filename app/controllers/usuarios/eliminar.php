<?php

include("../../../app/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$id_usuario = $_POST['id_usuario'];


    $sentencia = $pdo->prepare("DELETE FROM usuarios WHERE id_user = '$id_usuario' "); 
            
    //EJECUTAMOS SENTENCIA
            
            if ($sentencia->execute())
            {
                session_start();
                $_SESSION['mensaje'] = "Se elimino correctamente";
                $_SESSION['icono'] = "success";
             header('Location:'.$URL.'/admin/usuarios/usuarios.php');
            }else{
                session_start();
                $_SESSION['mensaje'] = "Error al eliminar usuario";
                $_SESSION['icono'] = "error";
                header('Location:'.$URL.'/admin/usuarios/registro.php');
            
        }
}







?>
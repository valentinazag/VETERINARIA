<?php

include("../../../app/config.php");


$id_producto = $_GET['id_producto'];


    $sentencia = $pdo->prepare("DELETE FROM productos WHERE id_producto = '$id_producto' "); 
            
    //EJECUTAMOS SENTENCIA
            
            if ($sentencia->execute())
            {
                session_start();
                $_SESSION['mensaje'] = "Se elimino correctamente";
                $_SESSION['icono'] = "success";
             header('Location:'.$URL.'/admin/productos/papelera_p.php');
            }else{
                session_start();
                $_SESSION['mensaje'] = "Error al eliminar el producto";
                $_SESSION['icono'] = "error";
                header('Location:'.$URL.'/admin/productos/papelera_p.php');
            
        }







?>
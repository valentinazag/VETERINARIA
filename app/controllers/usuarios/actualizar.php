<?php

include("../../../app/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$id_usuario = $_POST['id_usuario'];
$nombre_completo = $_POST['nombre_completo'];
$celular =$_POST['celular'];
$password=$_POST['password'];
$password_verify = $_POST['password_verify'];
$cargo = $_POST['cargo'];   



if($password == "")//SI NO QUIERO ACTUALIZAR PW
{  
    $sentencia = $pdo->prepare("UPDATE usuarios 
    SET nombre_completo=:nombre_completo,
    celular=:celular,
    cargo=:cargo,
    fyh_actualizacion=:fyh_actualizacion
    WHERE id_user=:id_user");
    $sentencia->bindParam(':nombre_completo', $nombre_completo);
    $sentencia->bindParam(':celular', $celular);
    $sentencia->bindParam(':cargo', $cargo);
    $sentencia->bindParam(':fyh_actualizacion', $fecha);
    $sentencia->bindParam(':id_user', $id_usuario);
    if($sentencia->execute())
        {
            session_start();
            $_SESSION['mensaje'] = "Actualización exitosa";
            $_SESSION['icono'] = "success";
            header('Location:'.$URL.'/admin/usuarios/usuarios.php');
        }
    else
        {
            session_start();
            $_SESSION['mensaje'] = "Error al actualizar ";
            $_SESSION['icono'] = "error";
            header('Location:'.$URL.'/admin/usuarios/usuarios.php');
        }
    }

else //SI QUIERO ACTUALIZAR CONTRASEÑA
    {
        if($password == $password_verify)
        {   
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sentencia = $pdo->prepare("UPDATE usuarios 
                                    SET nombre_completo=:nombre_completo,
                                    celular=:celular,
                                    password=:password,
                                    cargo=:cargo,
                                    fyh_actualizacion=:fyh_actualizacion
                                    WHERE id_user=:id_user");
            $sentencia->bindParam(':nombre_completo', $nombre_completo);
            $sentencia->bindParam(':celular', $celular);
            $sentencia->bindParam(':password', $password);
            $sentencia->bindParam(':cargo', $cargo);
            $sentencia->bindParam(':fyh_actualizacion', $fecha);
            $sentencia->bindParam(':id_user', $id_usuario);

            if($sentencia->execute())
            {
                session_start();
                $_SESSION['mensaje'] = "Actualización exitosa";
                $_SESSION['icono'] = "success";
                header('Location:'.$URL.'/admin/usuarios/usuarios.php');
            }
            else
            {
                session_start();
                $_SESSION['mensaje'] = "Error al actualizar ";
                $_SESSION['icono'] = "error";
                header('Location:'.$URL.'/admin/usuarios/usuarios.php');
            }
        
        
        
        }else
        {
            session_start();
            $_SESSION['mensaje'] = "Las contraseñas deben ser iguales ";
            $_SESSION['icono'] = "error";
            header('Location:'.$URL.'/admin/usuarios/update.php?id_usuario='.$id_usuario);
        
        }

    }


}
?>
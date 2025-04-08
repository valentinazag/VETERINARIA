<?php

include("../../../app/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$celular =$_POST['celular'];
$password=$_POST['password'];
$password_verify = $_POST['password_verify'];
$cargo = $_POST['cargo'];   

$contador=0;
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($usuarios as $usuario){
    $contador = $contador +1;
}

if($contador >0){
session_start();
 $_SESSION['mensaje'] = "El correo electrónico ".$email." ya esta registrado";
 $_SESSION['icono'] = "error";
 header('Location:'.$URL.'/admin/usuarios/registro.php');
}else{
    if($password == $password_verify)
    {
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sentencia = $pdo->prepare("INSERT INTO usuarios (nombre_completo, email, celular, password, cargo, fyh_creacion) 
                                values(:nombre_completo, :email, :celular, :password, :cargo, :fyh_creacion )");  //LO MANDO POR PARAMETROS PARA COMODIDAD
    
    //PARAMETROS
    $sentencia->bindParam(':nombre_completo', $nombre_completo);
    $sentencia->bindParam(':email', $email);
    $sentencia->bindParam(':celular', $celular);
    $sentencia->bindParam(':password', $password);
    $sentencia->bindParam(':cargo', $cargo);
    $sentencia->bindParam(':fyh_creacion', $fecha);
    
    //EJECUTAMOS SENTENCIA
            
            if ($sentencia->execute())
            {
                session_start();
                $_SESSION['mensaje'] = "Registro exitoso";
                $_SESSION['icono'] = "success";
             header('Location:'.$URL.'/admin/usuarios/usuarios.php');
            }else{
                session_start();
                $_SESSION['mensaje'] = "Error al registrar usuario";
                $_SESSION['icono'] = "error";
                header('Location:'.$URL.'/admin/usuarios/registro.php');
            }
        }
        else{
            session_start();
            $_SESSION['mensaje'] = "Las contraseñas deben ser iguales ";
            $_SESSION['icono'] = "error";
            header('Location:'.$URL.'/admin/usuarios/registro.php');
        }
}

}





?>
<?php
$sql = "SELECT * FROM usuarios WHERE id_user = '$id_usuario'";

$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($usuarios as $usuario)
{
    $nombre = $usuario['nombre_completo'];
    $email = $usuario['email'];
    $celular = $usuario['celular'];
    $cargo = $usuario['cargo'];
    $imagen_u = $usuario['imagen_u'];
    $fyh_creacion = $usuario['fyh_creacion'];
}

?>


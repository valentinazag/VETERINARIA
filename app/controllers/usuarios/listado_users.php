<?php
$sql = "SELECT * FROM usuarios WHERE estado = 'activo'";

$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

?>


<?php
$sql = "SELECT * FROM usuarios WHERE estado = 'desactivado' ";

$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

?>


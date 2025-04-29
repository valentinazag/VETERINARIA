<?php
$sql = "SELECT * FROM productos WHERE estado = 'desactivado' ";

$query = $pdo->prepare($sql);
$query->execute();

$productos = $query->fetchAll(PDO::FETCH_ASSOC);

?>


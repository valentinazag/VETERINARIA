<?php
$sql = "SELECT * FROM servicios WHERE estado = 'activo' ";

$query = $pdo->prepare($sql);
$query->execute();

$servicios = $query->fetchAll(PDO::FETCH_ASSOC);

?>


<?php
$sql = "SELECT * FROM servicios WHERE estado = 'desactivado' ";

$query = $pdo->prepare($sql);
$query->execute();

$servicios = $query->fetchAll(PDO::FETCH_ASSOC);

?>


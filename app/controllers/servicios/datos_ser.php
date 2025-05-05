<?php
$sql = "SELECT * FROM servicios WHERE id_servicio = '$id_servicio'";

$query = $pdo->prepare($sql);
$query->execute();

$servicios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($servicios as $servicio)
{
$codigo_s = $servicio['codigo_s'];
$nombre_servicio = $servicio['nombre_servicio'];
$descripcion_servicio = $servicio['descripcion_servicio'];
$valor = $servicio['valor'];
$fecha_creacion = $servicio['fyh_creacion'];

}


?>


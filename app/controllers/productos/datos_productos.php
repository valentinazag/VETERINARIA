<?php
$sql = "SELECT *, us.nombre_completo as nombre_completo
         FROM productos as pro 
        INNER JOIN usuarios as us 
        ON us.id_user = pro.id_usuario 
        WHERE id_producto= '$id_producto'";

$query = $pdo->prepare($sql);
$query->execute();

$productos = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($productos as $producto)
{
$codigo = $producto['codigo'];
$nombre_producto = $producto['nombre_producto'];
$descripcion = $producto['descripcion'];
$stock = $producto['stock'];
$stock_min = $producto['stock_min'];
$stock_max = $producto['stock_max'];
$precio_compra = $producto['precio_compra'];
$precio_venta = $producto['precio_venta'];
$fecha_ingreso = $producto['fecha_ingreso'];
$imagen = $producto['imagen'];
$id_usuario = $producto['id_usuario'];
$nombre_completo = $producto['nombre_completo'];

}


?>


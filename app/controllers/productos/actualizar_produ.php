<?php
include("../../../app/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$nombre_producto = $_POST['nombre_producto'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$stock_min = $_POST['stock_min'];
$stock_max = $_POST['stock_max'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$id_producto = $_POST['id_producto'];
$imagen = $_POST['imagen'];

if($_FILES['imagen']['name'] != null){
//echo " hay imagen";
$nombreimagen = date('Y-m-d-h-is').$_FILES['imagen']['name'];
$location= "../../../public/images/productos/".$nombreimagen;  //variable q almacena la imagen
move_uploaded_file($_FILES['imagen']['tmp_name'], $location); //fucnion q sube la imagen y la guarda con su nombre "tmp_name"
$imagen = $nombreimagen;
}else{
//echo "no hay imagen nueva";
$imagen = $imagen;
}



$sentencia = $pdo->prepare("UPDATE productos 
SET nombre_producto=:nombre_producto,
descripcion=:descripcion,
imagen=:imagen,
stock=:stock,
stock_min=:stock_min,
stock_max=:stock_max,
precio_compra=:precio_compra,
precio_venta=:precio_venta,
fecha_ingreso=:fecha_ingreso,
fyh_actualizacion=:fyh_actualizacion
WHERE id_producto=:id_producto");
$sentencia->bindParam(':nombre_producto', $nombre_producto);
$sentencia->bindParam(':descripcion', $descripcion);
$sentencia->bindParam(':imagen', $imagen);
$sentencia->bindParam(':stock', $stock);
$sentencia->bindParam(':stock_min', $stock_min);
$sentencia->bindParam(':stock_max', $stock_max);
$sentencia->bindParam(':precio_compra', $precio_compra);
$sentencia->bindParam(':precio_venta', $precio_venta);
$sentencia->bindParam(':fecha_ingreso', $fecha_ingreso);
$sentencia->bindParam(':fyh_actualizacion', $fecha);
$sentencia->bindParam(':id_producto', $id_producto);

if($sentencia->execute())
        {
            session_start();
            $_SESSION['mensaje'] = "Actualización de producto exitosa";
            $_SESSION['icono'] = "success";
            header('Location:'.$URL.'/admin/productos/vista_p.php?id_producto='.$id_producto);
        }
    else
        {
            session_start();
            $_SESSION['mensaje'] = "Error al actualizar ";
            $_SESSION['icono'] = "error";
            header('Location:'.$URL.'/admin/productos/vista_p.php?id_producto='.$id_producto);
        }
}


?>
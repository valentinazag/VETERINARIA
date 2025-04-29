<?php
include("../../../app/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$codigo = $_POST['codigo'];
$nombre_producto = $_POST['nombre_producto'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$stock_min = $_POST['stock_min'];
$stock_max = $_POST['stock_max'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$id_usuario = $_POST['id_usuario'];

$nombreimagen = date('Y-m-d-h-is').$_FILES['imagen']['name'];
$location= "../../../public/images/productos/".$nombreimagen;  //variable q almacena la imagen
move_uploaded_file($_FILES['imagen']['tmp_name'], $location); //fucnion q sube la imagen y la guarda con su nombre "tmp_name"

$sentencia = $pdo->prepare('INSERT INTO productos
(codigo,nombre_producto,descripcion,stock,stock_min,stock_max,precio_compra,precio_venta,fecha_ingreso,imagen,id_usuario, fyh_creacion)
VALUES ( :codigo,:nombre_producto,:descripcion,:stock,:stock_min,:stock_max,:precio_compra,:precio_venta,:fecha_ingreso,:imagen,:id_usuario,:fyh_creacion)');


$sentencia->bindParam(':codigo',$codigo);
$sentencia->bindParam(':nombre_producto',$nombre_producto);
$sentencia->bindParam(':descripcion',$descripcion);
$sentencia->bindParam(':stock',$stock);
$sentencia->bindParam(':stock_min',$stock_min);
$sentencia->bindParam(':stock_max',$stock_max);
$sentencia->bindParam(':precio_compra',$precio_compra);
$sentencia->bindParam(':precio_venta',$precio_venta);
$sentencia->bindParam(':fecha_ingreso',$fecha_ingreso);
$sentencia->bindParam(':imagen',$nombreimagen);
$sentencia->bindParam(':id_usuario',$id_usuario);
$sentencia->bindParam(':fyh_creacion',$fecha);




if ($sentencia->execute())
            {
                session_start();
                $_SESSION['mensaje'] = "Registro de producto exitoso";
                $_SESSION['icono'] = "success";
             header('Location:'.$URL.'/admin/productos/productos.php');
            }else{
                session_start();
                $_SESSION['mensaje'] = "Error al registrar producto";
                $_SESSION['icono'] = "error";
                header('Location:'.$URL.'/admin/productos/registro_prod.php');
            }
}
?>
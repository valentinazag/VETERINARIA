
<?php
$URL= "http://localhost/documents/VETERINARIA/";

define('APP_NAME','SISTEMA VETERINARIO- ZV'); //variable global que contiene el nombre del sistema
define('SERVIDOR','localhost');  //en el momento de hostear ne otro lado aca va la ip, ruta, etc
define('USUARIO','root');  
define('PASSWORD',''); 
define('BD','veterinaria'); 

$servidor= "mysql:dbname=".BD.";host:".SERVIDOR;

try {
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
   // echo "Conexion exitosa a BD";
} catch (PDOException $e) {
    print_r($e);
    echo "No se ha podido conectar a la BD";
}

?>
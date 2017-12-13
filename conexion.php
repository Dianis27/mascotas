<?php
$conexion =new mysqli("127.0.0.1", "root", "", "mascotas");

if($conexion){
    
} else {
    echo "conexion fallida".$mysqli->connect_error;
}

?>



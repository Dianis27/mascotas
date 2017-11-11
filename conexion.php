<?php
$conexion =new mysqli("localhost", "root", "", "mascotas");

if($conexion){
    
} else {
    echo "conexion fallida".$mysqli->connect_error;
}

?>



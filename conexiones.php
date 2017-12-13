<?php
    $server="localhost";
    $username="root";
    $password="";
    $db='mascotas';
    $con=mysql_connect($server,$username,$password)or die("No se ha podido establecer la conexion");
    $sdb=mysql_select_db($db,$con)or die("La base de datos no existe");

?>






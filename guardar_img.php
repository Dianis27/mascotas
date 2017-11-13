<?php

    include("conexion.php");
    
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $raza = $_POST['raza'];
    $descripcion = $_POST['descripcion'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name'])); 

    
    $query ="INSERT INTO adopcion (nombre, edad, raza, descripcion, imagen) VALUES ('$nombre', '$edad', '$raza', '$descripcion', '$imagen')";
    
        
    $resultado = $conexion->query($query);

    if($resultado){
        header("Location: mostrar_img.php");
    } 

    else {
        echo "Error al Guardar Imagen";
        
    }

?>
<?php

    include("conexion.php");
    
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
    $descripcion = $_POST['descripcion'];
    
    
    $query ="INSERT INTO productos (nombre, precio, imagen, descripcion) VALUES ('$nombre', '$precio', '$imagen', '$descripcion')";
    
        
    $resultado = $conexion->query($query);

    if($resultado){
        header("Location: mostrar_product.php");
    } 

    else {
        echo "Error al Guardar Imagen";
        
    }

?>
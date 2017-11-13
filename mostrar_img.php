<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="utf-8">
    
    <title>Mostrar imagenes</title>
    
    <link rel="stylesheet" href="estilo.css">
    <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale-1.0, maximum-scale=1.0, minimum=scale=1.0">
    
    <link href="css.css" rel="stylesheet">
    
    </head>
    <body>
        <div class="conten">
        <center><br/><br/>
            <table border="1">
                <thead>
                    <tr>
                        <th colspan="5"><a href="edit_adopciones.php">Agregar Imagen</a></th>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Raza</th>
                        <th>Descripcion</th>
                        <th>Imagen</th>
                        <th colspan="2">Operaciones</th>
                    </tr>
                                
                
                </thead>
                <tbody>
                    <?php
                    include ("conexion.php");
                    $query = "SELECT * FROM adopcion";
                    $resultado = $conexion->query($query);
                    while($row = $resultado->fetch_assoc()){
                    ?>
                    <tr>
                        <center>
                        
                        <td><?php echo $row['id']; ?></td>
                        
                        <td><?php echo $row['nombre']; ?></td>
                        
                        <td><?php echo $row['edad']; ?></td>
                        
                        <td><?php echo $row['raza']; ?></td>
                        
                        <td><?php echo $row['descripcion']; ?></td>
                                                
                        <td><img height="70px"  src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
                        
                        <th><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></th>
                        
                        <th><a href="#">Eliminar</a></th>
                        
                            </center>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            
            </table>
            
        
        </center>
    
    </div>
    </body>

</html>
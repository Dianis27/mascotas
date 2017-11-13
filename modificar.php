<!DOCTYPE html>
<html>
<head>
                
    <title>Prueba imagenes</title>
        
    </head>
    <body>
        
        <?php
                   
        include ("conexion.php");
        
        $id = $_REQUEST['id'];
        
        $query = "SELECT * FROM tb_productos WHERE cn_id_productos = '$id'";
        $resultado = $conexion->query($query);
        $row = $resultado->fetch_assoc();
       
        ?>
        
        <center><br/><br/>
            <form action="guardar_img.php" method="POST" enctype="multipart/form-data">
                
                <input type="text" required  name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre']; ?>"/><br/><br/>
                
                <img height="70px"  src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/><br/><br/>
                
                <input type="file" required  name="imagen"/><br/><br/>
                
                <input type="submit" value="Aceptar"/>
            </form>
        
        
        </center>
    
    
    </body>

</html>
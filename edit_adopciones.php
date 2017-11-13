<!DOCTYPE html>
<html>
<head>
    <title>Prueba imagenes</title>
    </head>
    <body>
        <center><br/><br/>
            <form action="guardar_img.php" method="POST" enctype="multipart/form-data">
                <input type="text" required  name="nombre" placeholder="Nombre..." value=""/><br/><br/>
                
                <input type="text" required  name="edad" placeholder="Edad..." value=""/><br/><br/>
                
                <input type="text" required  name="raza" placeholder="Raza..." value=""/><br/><br/>
                
                <input type="text" required  name="descripcion" placeholder="Caracteristicas..." value=""/><br/><br/>
                
                <input type="file" required  name="imagen"/><br/><br/>
                
                <input type="submit" value="Aceptar"/>
            </form>
        
        
        </center>
    
    
    </body>

</html>






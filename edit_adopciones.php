<!DOCTYPE html>
<html lang="es">
<head>
    <title>PetStars</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum=scale=1">
    
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/info.css">
    <script src="bootstrap/css/bootstrap.min.css"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </head> 
    
    <body>
        <header>
            <div class="contenedor">
            <h1 class="icon-paw">PetStars</h1>
            <input type="checkbox" id="menu-bar">
                
                
            </div>
             
        </header>
        
        <main>
        
        <section id="banner">
                <img src="css/img/mascota15.jpg">
                    <div class="contenedor">
                    
                        <h2><font color="gray"></font></h2>                                                    
                    </div>
                </section>
            
            
    <section>

           <center><br/><br/>
               <h2>Subir informacion sobre mascotas en adopcion: </h2><br/>
            <form action="guardar_img.php" method="POST" enctype="multipart/form-data">
                <input type="text" required  name="nombre" placeholder="Nombre..." value=""/><br/><br/>
                
                <input type="text" required  name="edad" placeholder="Edad..." value=""/><br/><br/>
                
                <input type="text" required  name="raza" placeholder="Raza..." value=""/><br/><br/>
                
                <input type="text" required  name="descripcion" placeholder="Caracteristicas..." value=""/><br/><br/>
                
                <input type="file" required  name="imagen"/><br/><br/>
                
                <input type="submit" value="Aceptar"/>
            </form>
               
                <br/><br/><br/><p class="icon-home3" align=center><a href="admin.php">Vover al Inicio</a></p><br/><br/>
        
        
        </center>
            </section>
            
                 
          
            
        <footer>
            <div class="contenedor">
                <p class="copy, icon-paw">PetStars  &copy; 2017</p>

            </div>
            
            </footer>
            
        </main> 
    </body>

</html>






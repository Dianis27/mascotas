<?php

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}

?>

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
        
        <center>
            
            <br/><br/>
            
        <?php
      
      echo '<h1 align=center>Bienvenido usuario:'.$_SESSION["user"].'</h1>';
           
        ?>
            
    <section id="Bienvenidos">
                    <center>
                <br/><br/><br/><br/><h2>Aministracion de la pagina</h2>
                    <h4>Selecciona la seccion que se va ha editar...</h4>  
                        
                <br/><br/><br/><br/><a class="icon-pencil" href="edit_adopciones.php">Administrar Adopciones </a>
                
                <br/><br/><br/><br/><a class="icon-price-tags" href="edit_productos.php">Administrar Productos</a>
                        
        <?php
        
         echo '<br/><br/><br/><br/><br/><p class="icon-home3" align=center><a href="salir.php">Vover al Login</a></p><br/><br/><br/><br/>';

      ?>
                
                </center>        
                </section>
                
            
            
      
       
            
            
            
            
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

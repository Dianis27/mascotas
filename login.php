<?php

session_start();
if (isset($_SESSION["user"])) {
  header("location:index.php");
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
    <link rel="stylesheet"       href="bootstrap/css/bootstrap.min.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <header>
            <div class="contenedor">
            <h1 class="icon-paw">PetStars</h1>
            <input type="checkbox" id="menu-bar">
                
                <label class="icon-menu" for="menu-bar"></label>
            
                <nav class="menu">
                    
                <a class="icon-home3" href="index.html">Inicio</a>
                
                <a class="icon-price-tags" href="productos.php">Productos</a>
                
                <a class="icon-profile" href="adopciones.php">Adopciones</a>
                
                <a class="icon-cart" href="carrito.php">Compras</a>
                
                <a class="icon-user" href="login.php">Login</a>
                
                </nav>
            
            </div>
             
        </header>
        
        <main>
        
        <section id="banner">
                <img src="css/img/mascotas5.jpg">
                    <div class="contenedor">
                    
                                                                      
                    </div>
                </section>
            
        <section id="login">
            <center>
            <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form method="post">
                                       
              <center><h1><p>Login</p></h1></center>
            <br><br>
            <div class="form-group">
              <br><br><label for="user">Usuario</label>
              <input type="text" name="user" id="user" oninput="validacion('user')" required pattern="([A-Z-a-z ]{3,10})" maxlength="10" class="form-control" >
            </div>
            <div class="form-group">
              <label for="pass">Password</label>
              <input type="password" name="pass" id="pass" oninput="validacion('pass')" required pattern="([a-z-0-9 ]{10})" maxlength="10"class="form-control" >
            </div>
            <br><br>
            <div class="form-group">
              <input type="button" name="login" id="login" value="Login" class="btn btn-success">
            </div>
            <br>
            <span id="result"></span>
          </form>
        </div>
      </div>
    </div>
            </center>
            
            
            </section>
            
            
            
            
            
            
            
            
        <footer>
            <div class="contenedor">
                <p class="copy, icon-paw">PetStars  &copy; 2017</p>
                <div class="sociales">
                    <a class="icon-facebook" href=""></a>
                    <a class="icon-twitter" href=""></a>
                    <a class="icon-whatsapp" href=""></a>
                    <a class="icon-mail2" href=""></a>
                </div>
            
            </div>
        
                </footer>    
                        
            
         </main>

        
        
        
        
       

    </body>
</html>
        
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
                <img src="css/img/mascotas9.jpg">
                    <div class="contenedor">
                    
                        <h2>Conoce nuestra linea de productos...</h2>                                                    
                    </div>
                </section>
            
            
        <section>
            
                       
            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
            <center>
                
                 <?php
                    include ("conexion.php");
                    $query = "SELECT * FROM tb_productos";
                    $resultado = $conexion->query($query);
                    while($row = $resultado->fetch_assoc()){
                ?>
                
            <div class="col-md-8">
                <div class="panel panel-info">
                    <div class="panel-heading"><?php echo $row['cn_nom_produc']; ?></div>
                    
                    <div class="panel-body">
                        <div class="col-md-4">
                            
                            <div class="panel panel-info"></div>
                            
                            <div class="panel-heading"><?php echo $row['cn_descripcion']; ?></div>
                            
                            <div class="panel-body">
                                <img height="70px"  src="data:image/jpg;base64,<?php echo base64_encode($row['cn_img']); ?>" />                      
                            </div>
                            
                            <div class="panel-heading">
                            
                               $ <?php echo $row['cn_precio']; ?> <button style="float:rigth;" class="btn btn-danger bt">Agregar al Carrito</button>
                            
                            </div>
                                                
                        </div>
                                                
                        </div>
                    
                    
                    
                    </div>
                
                            
                </div>
                
                 <?php
                    }
	           ?>
            
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
        
          
        
        
        
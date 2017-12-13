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
        
        <center><font color="Red"><h2>En esta seccion se muestra la informacion de los productos disponibles en la tienda</h2></font></center>
        
        <br/><p class="icon-home3" align=center><a href="admin.php">Vover al Inicio</a></p>

        <div class="conten">
        <center><br/><br/>
            <table border="1">
                <thead>
                    <tr>
                        <th colspan="4"><a href="edit_productos.php">Agregar Imagen</a></th>
                    </tr>
                    <tr>
                       
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Imagen</th>
                        
                       
                    </tr>
                                
                
                </thead>
                <tbody>
                    <?php
                    include ("conexion.php");
                    $query = "SELECT * FROM productos";
                    $resultado = $conexion->query($query);
                    while($row = $resultado->fetch_assoc()){
                    ?>
                    <tr>
                        <center>
                        
                       
                        <td><?php echo $row['nombre']; ?></td>
                                                                    
                        <td><?php echo $row['precio']; ?></td>
                                                                
                        <td><img height="150px"  src="css/img/<?php echo $row['imagen']; ?>"/></td>
                            
                        
                                                
                                                                                         
                            </center>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            
            </table>
            
        
        </center>
    
    </div>
            </section>
            
             <footer>
            <div class="contenedor">
                <p class="copy, icon-paw">PetStars  &copy; 2017</p>

            </div>
            
            </footer>
        </main>
    </body>

</html>
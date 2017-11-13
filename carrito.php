<?php
session_start();
include ("conexion.php");
if(isset($_SESSION['carrito'])){
    $arreglo=$_SESSION['carrito'];
    $encontro=false;
    $numero=o;
    for($i=0; $i<count($arreglo); $i++){
        if($arreglo[$i]['id']==$_GET['id']){
            $encontro=true;
            $numero=$i;
            
        }
    }
    
    if(encontro==true){
        $arreglo[$numero]['cantidad']=$arreglo[$numero]['cantidad']+1;
        $_SESSION['carrito']=$arreglo;
        
    }else{
         $nombre="";
        $precio=0;
        $imagen="";
        $re=mysql_query("select * from tb_productos where cn_id_productos=".$_GET['id']);
        while ($f=mysql_fetch_array($re)){
            $nombre=$f['cn_nom_produc'];
            $precio=$f['cn_precio'];
            $imagen=$f['cn_img'];
        }
        $datosNuevos=array('cn_id_productos'=>$_GET['id'], 'nombre'=>$nombre, 'precio'=>$precio, 'imagen'=>$imagen, 'cantidad'=>1);
        
        array_push($arreglo, $datosNuevos);
        $_SESSION['carrito']=$arreglo;
        
    }
    
}else{
    if(isset($_GET['id'])){
        $nombre="";
        $precio=0;
        $imagen="";
        $re=mysql_query("select * from tb_productos where cn_id_productos=".$_GET['id']);
        while ($f=mysql_fetch_array($re)){
            $nombre=$f['cn_nom_produc'];
            $precio=$f['cn_precio'];
            $imagen=$f['cn_img'];
        }
        $arreglo[]=array('cn_id_productos'=>$_GET['id'], 'nombre'=>$nombre, 'precio'=>$precio, 'imagen'=>$imagen, 'cantidad'=>1);
        
        $_SESSION['carrito']=$arreglo;
        
    }
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
                
                <label class="icon-menu" for="menu-bar"></label>
            
                <nav class="menu">
                    
                <a class="icon-home3" href="index.php">Inicio</a>
                
                <a class="icon-price-tags" href="productos.php">Productos</a>
                
                <a class="icon-profile" href="adopciones.php">Adopciones</a>
                
                <a class="icon-cart" href="carrito.php">Compras</a>
                
                <a class="icon-user" href="login.php">Login</a>
                
                </nav>
            
            </div>
             
        </header>
        
        <main>
        
        <section id="banner">
                <img src="css/img/mascotas17.jpg">
                    <div class="contenedor">
                    
                        <h2><font color="gray">Invertir en nuestros amigos peludos no tiene precio...</font></h2>                                                    
                    </div>
                </section>
            
        
        <section>
            
            <?php 
            
            $total=0;
            if(isset($_SESSION['carrito'])){
                $datos=$_SESSION['carrito'];
                
                for($i=0; $i<count($datos); $i++){
                    ?>
            
            <div>
                
                <center>
                <img src="productos.php<?php echo $datos[$i]['imagen']; ?>"><br>
                    
                <span><?php echo $datos[$i]['nombre']; ?></span><br>
                    
                <span>Precio: <?php echo $datos[$i]['precio']; ?></span><br>
                    
                <span>Cantidad: <input type="text" value="<?php echo $datos[$i]['cantidad']; ?>"/></span><br>
                
                <span>Precio: <?php echo $datos[$i]['cantidad']*$datos[$i]['precio']; ?>"/></span><br>
                
                
                </center>
                        
            </div>

<?php
    $total=($datos[$i]['cantidad']*$datos[$i]['precio'])+$total;
                }
                 
            } else {
                
                echo '<center><h2>El carrito esta vacio</h2></center>';
            }
    echo '<center><h2>Total: '.$total.'</h2></center>';
            
            ?>
            
            <center><a href="productos.php">Regresar al catalogo</a></center>
            
            
            
            
            
            
            
            </section>
            
            
            
            
            
            
            
            
        <footer>
            <div class="contenedor">
                <p class="copy, icon-paw">PetStars  &copy; 2017</p>
                <div class="sociales">
                    <a class="icon-facebook" href=""></a>
                    <a class="icon-twitter" href=""></a>
                    <a class="icon-whatsapp" href=""></a>
                    <a class="icon-mail2" href=""></a>
                     <a href="tel:5520369698">tel:5520369698</a>
                    
                   <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
<div id="SkypeButton_Call_live:tienda_petstar_1">
 <script type="text/javascript">
 Skype.ui({
 "name": "call",
 "element": "SkypeButton_Call_live:tienda_petstar_1",
 "participants": ["live:tienda_petstar"]
 });
 </script>
</div>     
                </div>
            
            </div>
        
                </footer>    
                        
            
         </main>

        
        
        
        
       

    </body>
</html>
        
        
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
                <img src="css/img/cintas.jpg">
                    <div class="contenedor">
                    
                        <h2><font color="red"></font></h2>                                                    
                    </div>
                </section>
                    
        <section id="login">
            
        <script>
	function validacion (id){
		var elem=document.getElementById(id);
		if (elem.checkValidity())
			elem.style.borderColor="blue";
		else
			elem.style.borderColor="red;";
	}
	function enviado()
	{
		var userValido=document.getElementById('user').checkValidity();
		var passValido=document.getElementById('pass').checkValidity();
		
		if(userValido, passValido)
			alert("La informacion fue enviada exitosamente");
		else
			alert("Hay campos incompletos o no cumplen con el formato solicitado");

	}

</script>
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
        

<script>
  $(document).ready(function() {
    $('#login').click(function(){
      var user = $('#user').val();
      var pass = $('#pass').val();
      if($.trim(user).length > 0 && $.trim(pass).length > 0){
        $.ajax({
          url:"entrar.php",
          method:"POST",
          data:{user:user, pass:pass},
          cache:"false",
          beforeSend:function() {
            $('#login').val("Validando...");
          },
          success:function(data) {
            $('#login').val("Login");
            if (data=="1") {
              $(location).attr('href','admin.php');
            } else {
              $("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> El usuario o la contaseña son incorrectas.</div>");
                        
            }
          }
                                              
        });
      };
    });
  });
</script>
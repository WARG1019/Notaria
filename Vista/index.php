<?php

session_start();

if(isset($_SESSION["usuario"])){

  header("location:home.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Superintendencia de Notariado & Registro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estiloslogin.css"/>
  <link rel="stylesheet" href="css/all.css"/>
  <link rel="stylesheet" href="css/fonts-awesome.min.css"/>
  <script src="js/jquery.min.js"></script>
</head>
<body>

<div class="container-fluid">
		<div id="resultado">
			
		</div>
	</div>	

    <!--<form  method="post"> -->
          <div class="container">
          	<div class="row">
          		<div id="contenedorlogin">
                      <div class="imagen">
                       <img class="figure img-fluid" src="img/SNR1.png"/>
                       <div class="container">
                      	<div class="row">
                      		<div class="col-md-3 usuario">
                      			<label for="usuario" class="control-label fuente text-center"><strong>Usuario</strong></label>
                      		</div>
                      		<div class="col-md-8 usuario push-1">
                      			<input type="text" class="caja1" name="user" id="user" placeholder="Introduzca su usuario">
                      		</div>
                      		<div class="col-md-3 password">
                      			<label for="usuario" class="control-label fuente"><strong>Contraseña</strong></label>
                      		</div>
                      		<div class="col-12 col-md-8 password push-1">
                      			<input type="password" class="caja1" name="password" id="password"placeholder="Introduzca su contraseña">
                      		</div>

                      	<button type="button" class="btn btn-danger btn-block boton" id="login" value="Login" name="login">
                          Login
                        </button>
                        </div>
                      	<a href="#"><p class="text-center enlace">¿Olvidaste tu Contraseña?</p></a>  
                      </div>        
          		</div>
          	</div>
          </div>
        </div> 

         <script src="js/bootstrap.min.js"></script>
         <script src="js/all.js"></script>
         <script src="js/fonts-awesome-all.js"></script>
         <script src="js/jquery-3.2.1.slim.min.js"></script>
         <script src="js/login.js"></script>

          <script type="text/javascript">
            var jQuery_3_2_1 = $.noConflict(true);
          </script>  

                  <script>
                  $(document).ready(function(){
                    console.log(jQuery_3_2_1().jquery); 
                    console.log($().jquery);
                   $("#login").click(validar);



                  });
                    </script>



</body>
</html>
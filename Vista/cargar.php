<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <title>Cargando sesion</title>
	 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>

 <div class="container">
 	<div class="row">
 		<div class="col-md-12">
      <br>
      <br>
      <br>
 	   <h3 class="text-center">
 		Estamos cargando su sesion.. Por favor espere
 	  </h3>
 	  <div class="progress" style="margin:100px">
      <div id="bar" class="progress-bar progress-bar-striped  progress-bar-animated active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
        <span class="sr-only">0% Complete</span>
      </div>
    </div>
    <script>
      var progreso = 0;
      var idIterval = setInterval(function(){
        // Aumento en 10 el progeso
        progreso +=10;
        $('#bar').css('width', progreso + '%');
        //$('#bar').text(progreso + '%');
       
      //Si llegó a 100 elimino el interval
        if(progreso == 100){
       clearInterval(idIterval);
       window.location = "home.php";
      }
      },1000);
    </script>
 		</div>

    <div class="col-md-12" style="margin-top:-30px; margin-left:300px;">
      <img class="img-fluid figure text-center"src="img/supernotariado.jpg"/>
    </div>

 	</div>
 </div>	
</body>

 <script src="js/bootstrap.min.js"></script>
 <script src="js/jquery.min.js"></script>

</html>
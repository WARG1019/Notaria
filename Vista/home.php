<?php


require "funciones.php";

session_start();

sleep(3);

   if (isset($_GET['b'])) {

        $g = $_GET['b'];

    }


    if (isset($_POST['b'])) {

        $g = $_POST['b'];

    }

  if (isset($_GET['c'])) {

        $c = $_GET['c'];

    }


if(isset($_POST['c'])){

   $c = $_POST['c'];

}

if($_SESSION["perfil"] == "administrador"){

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Superintendencia de Notariado & Registro</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/all.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/estiloshome.css"/>
    <link rel="stylesheet" href="css/metisMenu.css">
    
    <style>

     @media screen and (max-width: 1300px){

     .contenedor0{

      width:1100px;

     }

    }

    .container{

     width:900px;
     margin:auto;
     	
    }

    /*.contenedor0{

     max-width:1400px;
     min-width:300px;

    }*/
   
    </style>

</head>
<body>

    <div class="container-fluid contenedor1 fixed-top">
    	<div class="row">
    		
        <div class="col-3">
    		   <div class="logotipo">
                <img class="figure img-fluid" src="img/SNR1.png"/>
                </div>
            </div>

                <div class="col-md-2 col-2 d-none d-md-block">
                
                </div>
               
               <div class="col-md-3 d-none d-lg-block">
                <div class="logotipo2 d-none d-lg-block">
                  <img class="figure img-fluid" src="img/Minjusticia_Colombia.svg"/>
                </div>
               </div>

               <div class="col-md-4 col-8">

               <h5 class="text-right mt-4 tipografia"><strong> Usuario : <?php echo $_SESSION["usuario"]; ?> </strong></h5>
             
               </div>


    	</div>
    </div>

<div class="siderbar d-none d-xl-block">
     <div class="row">
       <div class="col-12 col-md-12">
           <nav class="menu topnav">
	          <ul id="menu1">
		          <li>
		                   <a href="?b=1" class="text-center tipografia2" id="enlace">
		                       <img class="figure img-fluid text-center" src="img/icons8-home-48.png" width="28px" height="28px">   
			                   <br>
			                   <strong>Inicio</strong>
			               </a>   

	        	    </li>
                    
                    <li>
	                         
	                          <a href="#" class="text-center tipografia2 has-arrow" aria-expanded="false" id="enlace">
	                               <img class="figure img-fluid text-center" src="img/icons8-documents-48.png" width="35px" height="35px">   
					                   <br>
					                   <strong>Registro Civil</strong>
			                      
					          </a>
					       <ul class="submenu">
			                <li><a class="text-left tipografia2" href="?b=5&c=5"><img src="img/icono103.png" class="figure img-fluid" width="28px" height="28px" alt="">Almacenar Registro</a></li>
			                <li><a class="text-left tipografia2" href="#"><img src="img/icono82.png" class="figure img-fluid" width="24px" height="24px" alt="">Consultar Registros</a></li>
			                <li><a class="text-left tipografia2" href="#"><img src="img/icono83.png" class="figure img-fluid" width="24px" height="24px" alt="">Enviar y Validar</a></li>
			                <li><a class="text-left tipografia2" href="#"><img src="img/icono84.png" class="figure img-fluid" width="24px" height="24px" alt="">Imprimir Registros</a></li>
			            </ul>
                   </li>
                   <li>
				             
				              <a href="#" class="text-center tipografia2 has-arrow" aria-expanded="false">
				                 <img class="figure img-fluid text-center" src="img/780270.png" width="28px" height="28px">   
				                   <br>
				                   <strong>Actas de Matrimonio</strong>
				             </a>

				             <ul class="submenu">
			                <li><a class="text-left tipografia2" href="#"><img src="img/icono85.png" class="figure img-fluid" width="24px" height="24px" alt="">Alm. Acta Matrimonial</a></li>
			            <li><a class="text-left tipografia2" href="#"><img src="img/icono86.png" class="figure img-fluid" width="24px" height="24px">Consultar Actas</a></li>
			                <li><a class="text-left tipografia2" href="#"><img src="img/icono88.png" class="figure img-fluid" width="24px" height="24px">Divorcios</a></li>
			                <li><a class="text-left tipografia2" href="#"><img src="img/icono89.png" class="figure img-fluid" width="24px" height="24px">Anulaciones</a></li>
			                <li><a class="text-left tipografia2" href="#"><img src="img/icono84.png" class="figure img-fluid" width="24px" height="24px">Impresiones de Actas</a></li>
			            </ul>
   
                   </li>
                 
                 <li>
				               
				              <a href="#" class="text-center tipografia2 has-arrow" aria-expanded="false">
				                <img class="figure img-fluid text-center" src="img/Untitled-17-512.png" width="28px" height="28px">   
				                   <br>
				                   <strong>Actas de Defuncion</strong>
				              </a>

				              <ul class="submenu">
			                <li><a class="text-left tipografia2" href="#"><img src="img/icono81.png" class="figure img-fluid" width="24px" height="24px" alt="">Subir Acta</a></li>
			                <li><a class="text-left tipografia2" href="#"><img src="img/icono90.png" class="figure img-fluid" width="24px" height="24px" alt="">Consultar Actas</a></li>
			                <li><a class="text-left tipografia2" href="#"><img src="img/icono83.png" class="figure img-fluid" width="24px" height="24px" alt="">Enviar Validacion</a></li>
			                <li><a class="text-left tipografia2" href="#"><img src="img/icono84.png" class="figure img-fluid" width="24px" height="24px">Imprimir Actas</a></li>
			            </ul>
				     
                   </li>
                 
                 
                   <li>
				              

				              <a href="#" class="text-center tipografia2 has-arrow" aria-expanded="false">
				                <img class="figure img-fluid text-center" src="img/1199010.png" width="28px" height="28px">   
				                   <br>
				                   <strong>Escritura</strong>
				               </a>

				         <ul class="submenu">
			                <li><a class="text-left tipografia2" href="#"><img src="img/icono91.png" class="figure img-fluid" width="24px" height="24px">Subir Escritura</a></li>
			                <li><a class="text-left tipografia2" href="#"><img src="img/icono92.png" class="figure img-fluid" width="24px" height="24px">Consultar Escritura</a></li>
			                <li><a class="text-left tipografia2" href="#"><img src="img/icono93.png" class="figure img-fluid" width="24px" height="24px">Traspasos</a></li>
			                <li><a class="text-left tipografia2" href="#"><img src="img/icono84.png" class="figure img-fluid" width="24px" height="24px">Imprimir Escritura</a></li>
			            </ul>
			  
                   </li>
                   

                   <li>

				              <a href="#" class="text-center tipografia2">
				                <img class="figure img-fluid text-center" src="img/sec2.png" width="28px" height="28px">   
				                   <br>
				                   <strong>Informes</strong>
				              </a> 
                   </li>
                   
                   <li> 
					         <a href="?b=7" class="text-center tipografia2"><img class="figure img-fluid text-center" src="img/585e4beacb11b227491c3399.png" width="28px" height="28px">   
					                   <br><strong>Usuarios</strong>
					          </a>
					         
                   </li>
              
                  
                   <li>
				             <a href="#" class="text-center tipografia2">
				                 <img class="figure img-fluid text-center" src="img/icons8-scanner-480.png" width="28px" height="28px">   
				                   <br>
				                   <strong>Digitalizaciones</strong>
		                        
				                 </a>
                   </li>

                   <li>
				             <a href="#" class="text-center tipografia2">
				                 <img class="figure img-fluid text-center" src="img/icono99.png" width="28px" height="28px">   
				                   <br>
				                   <strong>Salir del Sistema</strong>
		                        
				                 </a>
                   </li>

	          </ul>
           </nav>	
     
        </div>
    </div>

</div>


  <section class="container contenedor col-md-12 col-md-9 mt-5">
        <section class="row">
           <article class="col-12 mt-3">
              <div class="card pt-5 pr-5 pl-5 pb-5" style="border:none;">
                  <div class="card-block">
                    <div class="container">
                        <div class="row nuevocontenedor justify-content-around">  
                         
                          <?php
        
                        $metodo = new funciones();

                        if(isset($g)){
                         
                           switch($g){
                            
                            case 1:

                            echo $metodo -> inicio();

                            break;

                            case 2: 

                            echo $metodo -> inicio2();
                             
                            break;
                            
                            case 3:
                            

                            break;


                            case 4:


                            break;


                            case 5:

                            echo $metodo -> registro_civil();


                            break;

                            case 6:


                            break;

                            case 7:

                            echo $metodo -> usuario(); 
                            
                            break;
                       
                           }

                        }

                     ?> 


                        </div>
                    </div>
                  </div>
              </div>
            </article>

              <article class="col-12 mt-3 ">
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, rerum!</p> !-->
                <div class="card  pt-5 pr-5 pl-5 pb-5" style="border:none;">
                    <div class="card-block" id="contenedor23">
                     
                     <?php

                       if(isset($c)){

                       switch($c){
                        case 1:
                           
                           echo $metodo->crear_usuario();
                        break;

                        case 2: 
                           
                           echo $metodo->mostrar_usuario();
                        
                        break;
                        
                         case 3:
                         
                         echo $metodo->crear_usuario();

                         break; 

                        case 4:

                        echo $metodo->editar_usuario($usu);

                        break;
                        
                        case 5: 

                        echo $metodo -> subir_registro();  
                          
                        break;  

                        case 6:

                        echo $metodo -> mostrar_cliente();

                        break;

                        case 7:

                        echo $metodo -> ver_requerimiento();

                        break;

                        case 8:

                        echo $metodo -> ver_pre_cotizacion($requeri);

                        break;

                        case 9:

                        echo $metodo -> editar_evento($requeri);

                        break;

                        case 10:

                        echo $metodo -> cancelar_evento($requeri);

                        break;

                        case 11:

                        echo $metodo -> listado_cotizacion();

                        break;

                     }

                    } 
                   

                    ?>

                    </div>
                </div>    
              </article>
        </section>
  </section>

			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.min.js"></script>
			<script src="js/all.js"></script>
			<script src="js/fonts-awesome-all.js"></script>
			<script src="js/metisMenu.js"></script>
            <script src="js/acordion.js"></script>
		
            
                     
      </body>

   </html>

<?php

} else {

 //perfil secretaria	

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Superintendencia de Notariado & Registro</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/all.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/estiloshome.css"/>
    <link rel="stylesheet" href="css/metisMenu.css">
    <style>

    .container{

     width:900px;
     margin:auto;
     	
    }
   
    </style>

</head>
<body>

<div class="container-fluid contenedor1 fixed-top">
	<div class="row">
		<div class="col-3">
		   <div class="logotipo">
            <img class="figure img-fluid" src="img/SNR1.png"/>
            </div>
        </div>
            <div class="col-2">
            
            </div>
           
           <div class="col-3">
            <div class="logotipo2">
            <img class="figure img-fluid" src="img/Minjusticia_Colombia.svg"/>
            </div>
           </div>

           <div class="col-4">

           <h5 class="text-center mt-4 tipografia"><strong> Usuario : <?php echo $_SESSION["usuario"]; ?> </strong></h5>
         
           </div>


	</div>
</div>

<div class="siderbar">
     <div class="row">
       <div class="col-12 col-md-12">
           <nav class="menu topnav">
	          <ul id="menu1">
		          <li>
		                   <a href="?b=1" class="text-center tipografia2">
		                       <img class="figure img-fluid text-center" src="img/icons8-home-48.png" width="28px" height="28px">   
			                   <br>
			                   <strong>Inicio</strong>
			               </a>   

	        	    </li>
                    
                    <li>
	                         
	                          <a href="#" class="text-center tipografia2 has-arrow" aria-expanded="false">
	                               <img class="figure img-fluid text-center" src="img/20098.png" width="28px" height="28px">   
					                   <br>
					                   <strong>Registro Civil</strong>
			                      
					          </a>
					       <ul class="submenu">
			                <li><a class="text-right tipografia2" href="#"><img src="img/icono81.png" class="figure img-fluid" width="24px" height="24px" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nuevo Registro&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#"><img src="img/icono82.png" class="figure img-fluid" width="24px" height="24px" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Consultar Registros&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#"><img src="img/icono83.png" class="figure img-fluid" width="24px" height="24px" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enviar Validacion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#">Modificar Registros&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#"><img src="img/icono84.png" class="figure img-fluid" width="24px" height="24px" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Imprimir Registros&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			            </ul>
                   </li>
                   <li>
				             
				              <a href="#" class="text-center tipografia2 has-arrow" aria-expanded="false">
				                 <img class="figure img-fluid text-center" src="img/780270.png" width="28px" height="28px">   
				                   <br>
				                   <strong>Actas de Matrimonio</strong>
				             </a>

				             <ul class="submenu">
			                <li><a class="text-right tipografia2" href="#"><img src="img/icono85.png" class="figure img-fluid" width="24px" height="24px" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nueva Acta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#"><img src="img/icono85.png" class="figure img-fluid" width="24px" height="24px" alt="">Consultar Actas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#">Divorcios&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#">Anulaciones&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#">Imprimir Actas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			            </ul>
   
                   </li>
                 
                 <li>
				               
				              <a href="#" class="text-center tipografia2 has-arrow" aria-expanded="false">
				                <img class="figure img-fluid text-center" src="img/Untitled-17-512.png" width="28px" height="28px">   
				                   <br>
				                   <strong>Actas de Defuncion</strong>
				              </a>

				              <ul class="submenu">
			                <li><a class="text-right tipografia2" href="#"><img src="img/icono81.png" class="figure img-fluid" width="24px" height="24px" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nueva Acta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#">Consultar Actas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#">Enviar y Validar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#">Imprimir Registros&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			            </ul>
				     
                   </li>
                 
                 
                   <li>
				              

				              <a href="#" class="text-center tipografia2 has-arrow" aria-expanded="false">
				                <img class="figure img-fluid text-center" src="img/1199010.png" width="28px" height="28px">   
				                   <br>
				                   <strong>Escritura</strong>
				               </a>

				         <ul class="submenu">
			                <li><a class="text-right tipografia2" href="#">Ubicaciones&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#">Vendedores&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#">Eventos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#">Cotizaciones&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#">Items&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#">Clientes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			                <li><a class="text-right tipografia2" href="#">Indicadores&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			            </ul>
			  
                   </li>
                   

                   <li>

				              <a href="#" class="text-center tipografia2">
				                <img class="figure img-fluid text-center" src="img/sec2.png" width="28px" height="28px">   
				                   <br>
				                   <strong>Informes</strong>
				              </a> 
                   </li>

	          </ul>
           </nav>	
     
        </div>
    </div>

</div>


<section class="container mt-5 mr-5">
	<section class="row justify-content-between ml-0 mt-5">
		<div class="col-md-12 mt-5 ml-5">

        <?php
        
        $metodo = new funciones();

        if(isset($g)){
         
           switch($g){
            
            case 1:

            echo $metodo -> inicio();

            break;

            case 2: 

            //echo $metodo -> inicio2();
             
            break;
            
            case 3:


            break;


            case 4:


            break;


            case 5:


            break;

            case 6:


            break;

            case 7:

            //echo $metodo -> usuario(); 
            
            break;
       
           }

        }

     ?> 

      
         
	 </div>


	 <div class="col-md-12 mt-5">

                <?php   

                   if(isset($c)){

                       switch($c){

                        case 1:
                           
                           //echo $metodo->crear_usuario();

                        break;

                        case 2: 
                           
                           //echo $metodo->mostrar_usuario();
                        
                        break;
                        
                         case 3:
                         
                         //echo $metodo->crear_usuario();

                         break; 

                        case 4:

                        //echo $metodo->editar_usuario($usu);

                        break;
                        
                        case 5: 

                        //echo $metodo -> crear_evento();  
                          
                        break;  

                        case 6:

                        //echo $metodo -> mostrar_cliente();

                        break;

                        case 7:

                        //echo $metodo -> ver_requerimiento();

                        break;

                        case 8:

                        //echo $metodo -> ver_pre_cotizacion($requeri);

                        break;

                        case 9:

                        //echo $metodo -> editar_evento($requeri);

                        break;

                        case 10:

                        //echo $metodo -> cancelar_evento($requeri);

                        break;

                        case 11:

                        //echo $metodo -> listado_cotizacion();

                        break;

                     }

                    } 
                   

                    ?>
	 
	 </div>	   



	</section>

    

</section>

   

			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.min.js"></script>
			<script src="js/all.js"></script>
			<script src="js/fonts-awesome-all.js"></script>
			<script src="js/metisMenu.js"></script>
            <script src="js/acordion.js"></script>
		
            
                  
    
      </body>

   </html>

  
<?php

}

?>







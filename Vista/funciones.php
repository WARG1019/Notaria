<?php


include "../Datos/conexion.php";
require "../Controlador/usuarioControlador.php";

class funciones extends usuarioControlador{


///////////////////////////////// Funciones de Pantalla inicial //////////////////////////////////

function inicio(){

$inicio ='

        

          <div class="col-12 col-md-10 ml-5">

           
                 <button class="btn btn-success" style="width:140px; height:152px;">
                
                <strong><p class="text-center" style="font-size:35px; font-family:Roboto;">136</p></strong>

                <img class="figure img-fluid text-center" src="img/20098.png" width="28px; height="28px";>
            
                 <strong><p class="text-center mt-0 tipografia3">Registros Civil</p></strong>

               </button>

               <button class="btn btn-primary" style="width:140px; height:152px;">
               
               <strong><p class="text-center" style="font-size:35px; font-family:Roboto;">236</p></strong>

                <img class="figure img-fluid text-center" src="img/780270.png" width="28px" height="28px">
            
                 <strong><p class="text-center mt-0 tipografia3">Actas <br> de Matrimonio</p></strong>


               </button>
               <button class="btn btn-warning" style="width:140px; height:152px;">
                
                <strong><p class="text-center tipografia3" style="font-size:35px; font-family:Roboto;">56</p></strong>

                <img class="figure img-fluid text-center" src="img/Untitled-17-512.png" width="28px" height="28px">
            
                 <strong><p class="text-center mt-0 tipografia3">Actas <br>de Defuncion</p></strong>

               </button>
               <button class="btn btn-info" style="width:140px; height:152px;">
                
                <strong><p class="text-center tipografia3" style="font-size:35px; font-family:Roboto;">23</p></strong>

                <img class="figure img-fluid text-center" src="img/1199010.png" width="28px" height="28px">
            
                 <strong><p class="text-center mt-0 tipografia3">Escritura</p></strong>

               </button>


                </div>

                <div class="col-md-8 mt-5">
                <img class="figure"src="img/supernotariado.jpg" alt="">
               </div>
          
      </div>';

         echo $inicio;


}


////////////////////////////////// funciones de usuario ////////////////////////////////////////


function usuario(){

  

$user='

          <div class="col-12 col-md-12">

           <a href="home.php?c=1&b=7"class="btn btn-success" style="width:140px; height:152px;">
           
           <br>

          <img class="figure img-fluid text-center" src="img/icono94.png" width="35px; height="35px";>

      
           <strong><p class="text-center mt-0 tipografia3">Crear Usuario</p></strong>

         </a>

         <a href="#" class="btn btn-primary" style="width:140px; height:152px;">
          
          <br>

          <img class="figure img-fluid text-center" src="img/icono97.png" width="35px" height="35px">

      
           <strong><p class="text-center mt-0 tipografia3">Modificar <br>Usuario</p></strong>


         </a>
         <a href="#" class="btn btn-info" style="width:140px; height:152px;">
          
          <br>

          <img class="figure img-fluid text-center" src="img/icono96.png" width="35px" height="35px">
      

           <strong><p class="text-center mt-0 tipografia3">Listar Usuarios</p></strong>

         </a>
         <a href="#" class="btn btn-danger" style="width:140px; height:152px;">
          
          <br>

          <img class="figure img-fluid text-center" src="img/icono98.png" width="28px" height="28px">

      
           <strong><p class="text-center mt-0 tipografia3">Eliminar <br>Usuarios</p></strong>

         </a>


          </div>
     </div>
  </div>';

  echo $user;


}





function crear_usuario(){


    

  $creus='    
             
             <div class="col-12 col-md-12" id="result">

              </div>
          
           
              <div class="col-12 col-md-12">

                  <br>
                  <h2>Formulario Creacion Usuario</h2>
                   <br>

                        <input type="hidden" name="b" value="1">
                        <input type="hidden" name="c" value="3"> 

                      <div class="form-group row">
                                                      
                           <div class=" col-10 col-md-5">
                                <label for="usuario">Nombre de Usuario</label>
                                    <input type="text"  class="form-control" name="nome" id="nome" placeholder="Nombre">
                            </div>
                              
                               <div class=" col-10 col-md-5">
                                  <label for="apellido ">Apellido</label>
                                        <input type="text"  class="form-control" name="ape" id="ape"  placeholder="Apellido"> 
                               </div>
                                                  
                      </div>
                                            


                                  <div class="form-group row">
                                                      
                                      <div class=" col-10 ">
                                          <label for="identificacion">Identificacion</label>
                                            <input type="text"  class="form-control" name="iden" id="iden" placeholder="Identificacion">
                                    </div>
                                </div>

                                 
                                  
                                  <div class="form-group row">                        
                                    <div class=" col-10">
                                     <label for="correo">Correo</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Correo Electronico">
                                        </div>
                                            
                                  </div>                       
                                  
               


                           <div class="form-group row">
                                                      
                              <div class=" col-10">
                                 <label for="movil">Movil (telefono)</label>
                                    <input type="text" class="form-control" placeholder="Telefono movil" name="movil" id="movil">
                                </div>
                           </div>    

                           
                           <div class="form-group row">     

                             <div class="col-10">
                                 <label for="perfil">Perfil del Usuario</label>'.
                                   //$this -> input("usuarios","perfil","WHERE perfil = 'administrador'", "nom_usu","", "nom_usu", "text")
                                   $this->seleccion2("usuarios", "perfil", "", "perfil", "perfil").
                                   '</div>
                           </div>         
                           

                          <div class="form-group row"> 
                             <div class="col-10">
                                   <label for="user">Usuario</label>
                                      <input type="text" class="form-control" placeholder="user" name="user" id="user">
                                  </div>
                           </div>    
                           
                            <div class="form-group row"> 
                             <div class="col-10">
                                   <label for="password">Password</label>
                                      <input type="password" class="form-control" placeholder="password" name="password" id="password">
                                  </div>
                           </div>    
                           
            
                                      <button class="btn btn-primary  btn-block btn-sm ml-2 mt-5" type="button" name="nomb_usu" id="nomb_usu" style="width:80%; height:50px;">Guardar Usuario</button>
                                      <button class="btn btn-primary  btn-block btn-sm ml-2 mt-2" type="button" name="limpia" id="limpia" style="width:80%; height:50px;">Reset</button>
                                

                                 <br>
                                 <br>

                    </div>';
                 echo $creus;
}








function mostrar_usuario(){




 

}

///////////////////////////////// Funciones de registro Civil /////////////////////////////////

function registro_civil(){

$registro ='

      <div class="col-md-12">

         <a href="#" class="btn btn-primary" style="width:140px; height:152px;">
          
          <br>

          <img class="figure img-fluid text-center" src="img/icono101.png" width="35px" height="35px">

      
           <strong><p class="text-center mt-0 tipografia3">Modificar <br>Registro Civil</p></strong>


         </a>
         <a href="#" class="btn btn-info" style="width:140px; height:152px;">
          
          <br>

          <img class="figure img-fluid text-center" src="img/icono100.png" width="35px" height="35px">
      

           <strong><p class="text-center mt-0 tipografia3">Consultar Registro Civil</p></strong>

         </a>
         <a href="#" class="btn btn-success" style="width:140px; height:152px;">
          
          <br>

          <img class="figure img-fluid text-center" src="img/icono84.png" width="28px" height="28px">

      
           <strong><p class="text-center mt-0 tipografia3">Imprimir <br>Registro Civil</p></strong>

         </a>

         <a href="home.php?b=5" class="btn btn-danger" style="width:140px; height:152px;">
          
          <br>

          <img class="figure img-fluid text-center" src="img/icons8-documents-48.png" width="35px" height="35px">

      
           <strong><p class="text-center mt-0 tipografia3">Registro Civil</p></strong>

         </a>
      </div>';

  echo $registro;


}


function subir_registro(){

 $subir = '      
              <div class="col-12 col-md-12">   
                  <br>
                  <h2>Almacenar Registro Civil</h2>
                   <br>
                    //<form  method="post" action="home.php" id="formcreus">

                        <input type="hidden" name="b" value="1">
                        <input type="hidden" name="c" value="3">


                        <div class="form-group row">
                                                      
                                      <div class="col-10">
                                          <label for="identificacion">NUIP</label>
                                            <input type="text"  class="form-control" name="iden" placeholder="Identificacion">
                                    </div>
                                </div>

                      <div class="form-group row">
                                                      
                           <div class=" col-10 col-md-5">
                                <label for="usuario">Nombre</label>
                                    <input type="text"  class="form-control" name="nome" placeholder="Nombre">
                            </div>
                              
                               <div class=" col-10 col-md-5">
                                  <label for="apellido ">Apellido</label>
                                        <input type="text"  class="form-control" name="ape"  placeholder="Apellido"> 
                               </div>
                                                  
                      </div>
                                            
                                  
                                  <div class="form-group row">                        
                                    <div class=" col-10">
                                     <label for="fechanacimiento">fecha de Nacimiento</label>
                                        <input type="text" class="form-control" name="cor" id="email" placeholder="Fecha de Nacimiento">
                                        </div>
                                            
                                  </div>                       
                                  
              
                           
                           <div class="form-group row">     

                             <div class=" col-12 col-md-10">
                                 <label for="perfil">Perfil del Usuario</label>
                                    <input type="text" class="form-control" placeholder="Perfil del Usuario" name="perfil" id="perfil"></div>
                           </div>         
                           
                           
            
                                      <button class="btn btn-primary  btn-block btn-sm ml-2 mt-5" type="submit" name="gcli" style="width:80%; height:50px;">Guardar</button>
                                

                                 <br>
                                 <br>

                     </form>

                 </div>';

                 echo $subir;

}





}



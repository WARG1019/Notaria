<?php

   require_once "../Datos/conexion.php";

   class usuarioControlador{

   function input($tabla, $campo, $cond, $nombre, $clas, $car, $type) {
           
          $conect = new conexion();
          $conecta = $conect -> conectar();
          $sql1 = 'SELECT '.$campo.' '.'FROM'.' '.$tabla.' '.$cond;
          echo "<script>alert('$sql1');</script>";
          $consulta= mysqli_query($conecta, $sql1);
          $res = mysqli_fetch_array($consulta);
          $val= $res[$campo];
          return ('<input type="' . $type . '"  id="'.$car.'"  name="' . $nombre . '" value="'.$val.'"  class="' . $clas . ' form-control">');
    }


    function seleccion2($tabla,$campo,$cond,$nombre,$id) {

       //$ca=$campo.",".$valor;
        $valor = 'administrador';
        $valor1 = 'secretaria';  
        $cnn = new conexion();
        $con = $cnn -> conectar();
        $sql2 = "select ".$campo." from ".$tabla;
        $r = mysqli_query($con, $sql2);
        $sel="<select name='".$nombre."' id ='".$id."'  class='form-control'>";
        $sel.="<option value=''>--Seleccione--</option>";

       $sel.="<option value = administrador >" . $valor .  "</option>";

       $sel.="<option value = secretaria >" . $valor1 .  "</option>";

      
    
        $sel.="</select>";

    return $sel;
    
    }


}

 

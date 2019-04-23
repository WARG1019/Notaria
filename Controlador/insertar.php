<?php

include_once "../Datos/conexion.php";

session_start();

$cnn = new conexion();
$con = $cnn -> conectar();


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$identificacion = $_POST["identificacion"];
//$correo = $_POST["correo"];
//$movil = $_POST["movil"];
$perfil = $_POST["perfil"];
$usuario =$_POST["user"];
$password = md5($_POST["password"]);



$sql3 = "INSERT INTO usuarios (idusuario, nombre, apellido, usuario, contrasena, perfil) VALUES ($identificacion, '$nombre', '$apellido', '$usuario', '$password', '$perfil')";

//echo "<script>alert($sql3);</script>";

  $res = mysqli_query($con, $sql3);
  
//echo "<script>alert($res);</script>";  


 if($res){

 	echo "1";

  } else {

 	echo "error";
 }
 



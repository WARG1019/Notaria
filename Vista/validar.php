<?php

session_start();

$cnn = mysqli_connect("localhost","root","warg","notaria");

if(isset($_POST["usuario"]) && isset($_POST["pass"])){
  $usuario = mysqli_real_escape_string($cnn, $_POST["usuario"]);
  $pass = mysqli_real_escape_string($cnn, $_POST["pass"]);
  $sql= "SELECT * FROM usuarios WHERE (usuario ='$usuario') AND (contrasena ='$pass')";
  $result = mysqli_query($cnn, $sql);
  $num_row = mysqli_num_rows($result);
  if($num_row == "1"){
  	$data = mysqli_fetch_array($result);
  	$_SESSION["usuario"] = $data["usuario"];
  	$_SESSION["pass"] = $data["contrasena"];
    $_SESSION["perfil"] = $data["perfil"];
  	echo "1";

  } else {
  	echo "error";
  }

} else {
	echo "error";
}


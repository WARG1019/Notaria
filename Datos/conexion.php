<?php


class conexion{

	function conectar(){
	return mysqli_connect("localhost", "root", "warg", "notaria");

	}

}

/*
$cnn = new conexion();
$con = $cnn -> conectar();
$sql = "INSERT INTO usuarios (idusuario, nombre, apellido, usuario, contrasena, perfil) VALUES (1134256, 'andres', 'rojas', 'andres', 'rojas', 'administrador')";
$cone = mysqli_query($con, $sql);



$cnn = new conexion();
$con = $cnn -> conectar();
$sql = "SELECT * FROM usuarios";
$cone = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($cone)){
var_dump($row);
}

*/


 

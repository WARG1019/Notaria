<?php


class conexion{

	function conectar(){
	return mysqli_connect("localhost", "root", "warg", "notaria");

	}

}



/*$cnn = new conexion();
$con = $cnn -> conectar();
$sql = "SELECT * FROM usuarios";
$cone = mysqli_query($con, $sql);
$row = mysqli_fetch_array($cone);
var_dump($row);*/




 

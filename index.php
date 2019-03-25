<?php

session_start();

if(isset($_SESSION["usuario"])){

  sleep(3);
  header("location:Vista/home.php");

}else{
    sleep(3);
	header("Location:Vista/index.php");
	
}


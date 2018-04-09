<?php 

	include_once('Coneccion.php');

	$DB= new ConfigDB();
	$DB->Mysql();

	$usario=$_POST["Usuario"];
	$Contrasena=md5($_POST["Contraseña"]);

	$DB->CONSULTA("INSERT into usuarios values(0,'$usario','$Contrasena');");

	echo "<script>alert usario ingresado con exito</script>";

	header("../index.php");

 ?>
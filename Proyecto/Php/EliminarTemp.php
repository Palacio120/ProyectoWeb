<?php 
	include_once('Coneccion.php');
		
	$DB= new ConfigDB();
	$DB->Mysql();
	$id=$_GET["id"];
	$DB->CONSULTA("DELETE from Temp where idTemp='$id'");

	echo "<script>window.location='../Carrito.php'</script>";
 ?>
<?php 
	include_once('Coneccion.php');

	$DB= new ConfigDB();
	$DB->Mysql();
	$Nombre=$_POST["Nombre"];
	$Telefono=$_POST["Telefono"];
	$Correo=$_POST["Correo"];
	$Direccion=$_POST["Direccion"];
	$Tarjeta=$_POST["Tarjeta"];
	$CVV=$_POST["CVV"];
	$Usuario=$_SESSION["Id"];
	$Total=$_SESSION["PrecioTotal"];

	$DB->CONSULTA("UPDATE Perfil set `Nombre` ='$Nombre',`Telefono` ='$Telefono',`Correo` ='$Correo',`TarjetaNum` ='$Tarjeta',`CVV` ='$CVV',`Direccion` ='$Direccion' WHERE IDUsusario=$Usuario)");

	$DB->CONSULTA("INSERT INTO compras VALUES(0,'$Usuario','$Total')");
	$query=$DB->CONSULTA("SELECT * FROM temp WHERE Id_Usuario='$Usuario'");
	while ($rs=$DB->Obtener_filas($query)) {
		$Id_Pro=$rs['Id_Prod'];
		$DB->CONSULTA("INSERT INTO Compra Values (0,'$Id_Pro',(SELECT Precio FROM Productos WHERE idProductos='$Id_Pro'),)");
	}

 ?>
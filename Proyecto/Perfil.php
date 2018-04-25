<?php 
	include_once('header.php');
 
	include_once('Php/Coneccion.php');
	$DB= new ConfigDB();
	$DB->Mysql();
	$Usuario=$_SESSION["id"];
	$query=$DB->Consulta("SELECT `perfil`.`idPerfil`,`perfil`.`Nombre`,`perfil`.`Telefono`,`perfil`.`Correo`,`perfil`.`TarjetaNum`,`perfil`.`CVV`,`perfil`.`Imagen`,`perfil`.`Tipo`,`perfil`.`Nombre_Img`,`perfil`.`Direccion` from `proyectoweb`.`perfil` WHERE IDUsusario='$Usuario';");


	while ($rs=$DB->Obtener_filas($query)) {
 ?>	
	<h1>Perfil de usuario</h1>
	<img src="<?php echo "data:image/jpeg;base64,".base64_encode($rs["Imagen"]) ?>" alt="" class="card-img-top" style="height: 200px; width: 80%; display: inline-block;">
		

<?php } ?>
</div>
 <?php 
 	include_once('footer.php');
  ?>
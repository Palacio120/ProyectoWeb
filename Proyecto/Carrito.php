<?php
	include_once('header.php');
	if (!isset($_SESSION["usuario"])) {
		echo "<script>Window.onload=NoLog2();</script>";
	}
	include_once("Php/Coneccion.php");
	$DB=new ConfigDB();
	$DB->Mysql();
	$usuario=$_SESSION["id"];
	$Total=0;
	if (isset($_GET["id"])) {
		$id=$_GET["id"];
		$DB->CONSULTA("INSERT into Temp values(0,'$id','$usuario')");
	}


	$query=$DB->CONSULTA("SELECT * from `productos` Join `Temp` on productos.idProductos= Temp.Id_Prod where Id_Usuario='$usuario'");
	if ($DB->total_Filas($query)<=0) {
		?>
		<div class="container" style="text-align: center; display: block; margin-top: 25%; margin-bottom: 25%">
	 		<h1>No hay nada dentro del carrito de compras :(</h1>
	 	</div>


		<?php
	}else{
		?>
		</div>
		<div class="container" id="Carrito" style="height: 100%; display: block;">
		<table class="table" cellpadding="colapse" style="width: 100%;text-align: center;margin: 10px; height: 100%">

		<?php
		$Num= 0;
		while ($rs=$DB->Obtener_filas($query)) {
			$Num++;
			?>
				<tr>
					<td><?php echo $Num; ?></td>
					<td style="width: 30%"><img src="<?php echo "data:image/jpeg;base64,".base64_encode($rs["Imagen"]) ?>" alt="" class="card-img-top" style="height: 200px; width: 80%; display: inline-block;"></td>
					<td><?php echo $rs["Nombre"]; ?></td>
					<td>
						<div style="height: 100%">
							<div class="Esquina">
							<a href="#" onclick="Eliminar(<?php echo $rs['idTemp']; ?>)"><img src="Imagenes/eliminar.png" alt="eliminar"></a>
						</div>
						<?php
							echo "$".$rs["Precio"].".00 MXN";
							$Total+=$rs["Precio"];
							$_SESSION["PrecioTotal"]=$Total;
						?>

						</div>

					</td>


				</tr>


			<?php
		}
		?>
			<tr>
				<td colspan="3">TOTAL</td>
				<td><?php echo "$ ".$Total.".00 MXN"; ?></td>
			</tr>

		</table>
			<div class="row">
				<div class="col-md-8"></div>
				<div class="col-md-4" style="text-align: right;">
					<button class="btn btn-primary" onclick="Mostrar_Formato()" style="margin: 10px;">Proceder al pago</button>
				</div>
			</div>

		</div>
		<?php
		include_once("Php/Coneccion.php");
		$DB=new ConfigDB();
		$DB->Mysql();
		$usuario=$_SESSION["id"];
		echo $usuario;

			$consulta=$DB->CONSULTA("SELECT * from perfil where IDUsusario =$usuario");

			while ($i=$DB->Obtener_filas($consulta)) {
				
		 	?>
	<div class="container" id="Formato" style="display: none; text-align: center; margin-top: 10%; margin-bottom: 10%">
		<h1>Datos del Usuario</h1>
			<form action="Php/GuardarDatos.php" method="post" >
				<div class="row">
					<div class="col-md-4">
						<label>Nombre</label>
						<input type="text" name="Nombre" class="form-control" value="<?php if (!is_null($i['Nombre'])) {echo $i['Nombre'];} ?>" required >

					</div>
					<div class="col-md-4">
						<label>Telefono</label>
						<input type="text" name="Telefono" class="form-control" required maxlength="10">

					</div>
					<div class="col-md-4">
						<label>Correo</label>
						<input type="text" name="Correo" class="form-control" required >

					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<label>Direccion</label>
						<input type="text" name="Direccion" class="form-control" required>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<label>Tarjeta</label>
						<input type="text" name="Tarjeta"  class="form-control"  required>
					</div>
					<div class="col-md-4">
						<label>cvv</label>
						<input type="text" name="CVV" class="form-control" required maxlength="4">
					</div>
				</div>
				<div class="row" style="margin-top: 10px">
					<div class="col-md-8">
					</div>
					<div class="col-md-4">
						<button onclick="Cancelar()" class="btn btn-ligth">Cancelar</button>
						<input type="submit" name="Submit" class="btn btn-primary" style="margin-left: 20px;">
					</div>
				</div>

			</form>
		</div>
	<?php } ?>
	</div>
		<?php
	}
 ?>



 <?php
 	include_once('footer.php')
  ?>

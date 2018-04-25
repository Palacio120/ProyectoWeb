<?php 
include_once('header.php');
	
	if(isset($_GET["idProd"])){
		$idProd= $_GET["idProd"];
	}else {
		header('location: index.php');
	}
	include_once('Php/coneccion.php');

	$DB= new ConfigDB();
	$DB->Mysql();

	$query=$DB->CONSULTA("SELECT * From productos where idProductos= '$idProd'");

	while ($rs=$DB->Obtener_filas($query)) {
 ?>
		<div class="container" id="Desplegado">
			<img src="<?php echo "data:image/jpeg;base64,".base64_encode($rs["Imagen"]) ?>" alt="" class="card-img-top" style="height: 300px; width: 30%; display: inline-block; float: left;">
			<h1><?php echo $rs["Nombre"] ?></h1>
			<h3><i><?php echo "$ ".$rs["Precio"].".00"; ?></i></h3>
			<p><?php echo $rs['Descripccion'] ?></p>
			<button class="btn btn-ligth" style=" " onclick="AgregarCarrito(<?php echo $rs["idProductos"];?>)" >Agrgar al carrito</button>
		</div>
<?php } ?>
	</div>
 <?php
 	include_once('footer.php');
  ?>
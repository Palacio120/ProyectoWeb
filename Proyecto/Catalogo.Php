<?php 
	include_once('header.php');
 ?>	
 	</div>
 	<div class="row" style="margin: 5px;">
 		<!--<div class="col-md-3">
 		<h3>Busquedas</h3>
 			<form action="">
 				<input type="text" class="form-control mr-sm-2">
 				<button class="btn btn-ligth my-sm-2">Buscar</button>
 			</form>
 		</div>-->
 		<div class="col-md-12" id="Ventana">
			<?php 
			include_once("Php/Coneccion.php");
			$DB=new ConfigDB();
			$DB->Mysql();

			$consulta=$DB->CONSULTA("SELECT `productos`.`idProductos`,`productos`.`Nombre`, `productos`.`Descripccion`,    `productos`.`Precio`,    `productos`.`Imagen`, `productos`.`NombreTemp`, `productos`.`Tipo` FROM `proyectoweb`.`productos`Limit 20;");
			  ?>
			 <div class="row" style="margin-top: 10px;">
			 <?php
			  while ($rs=$DB->Obtener_filas($consulta)) {
			   ?>
			    <div class="col-md-3">
			      <div class="card mb-4 box-shadow">
			        <a href="Desplegar.php?idProd=<?php echo $rs["idProductos"];?>"><img src="<?php echo "data:image/jpeg;base64,".base64_encode($rs["Imagen"]) ?>" alt="" class="card-img-top" style="height: 300px; width: 100%; display: block;"></a>
			        
			        <p id="Etiqueta" style="text-align: right;"><b><i style="right: 0px;"><?php echo "$".$rs["Precio"].".00 MXN " ; ?></i></b></p>
			        <button class="btn btn-ligth" onclick="AgregarCarrito(<?php echo $rs["idProductos"]; ?>)">Agrgar al carrito</button>
			      </div>
			    </div>
			 <?php 
			      }
			    ?>
			</div>
		 </div>
    </div>
<?php
  include('footer.php')
 ?>

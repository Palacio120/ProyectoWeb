<?php 
	include_once('header.php');
	
	if (isset($_GET["Tipo"])) {
		$dato=$_GET["Tipo"];
		echo "<script>Consulta1('$dato')</script>";
	}else{
	echo "<script onload>Consulta()</script>";
	}
 ?>	
 	</div>
 	<div class="row" style="margin: 5px;">
 		<div class="col-md-3">
 		<h3>Busquedas</h3>
 			<input type="text" name="busqueda" id="caja" class="form-control mr-sm-2">
 		</div>
 		<div class="col-md-9" id="Ventana">
			
		</div>
	</div>
</div>
<?php
  include('footer.php')
 ?>

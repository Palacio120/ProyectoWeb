<?php  
include_once("Coneccion.php");
$DB=new ConfigDB();
$DB->Mysql();

$consulta=$DB->CONSULTA("SELECT * FROM `proyectoweb`.`productos`;");


if (isset($_POST["consulta"])){

	$q= $_POST["consulta"];
  $consulta=$DB->CONSULTA("SELECT * FROM `proyectoweb`.`productos` where Calificativo LIKE '%".$q."%' OR Descripccion LIKE '%".$q."%';");

}
  ?>
 <div class="row" style="margin-top: 10px;">
 <?php
    if ($DB->total_Filas($consulta) >0) {
       while ($rs=$DB->Obtener_filas($consulta)) {
        ?>

        <div class="col-md-3">
      <div class="card mb-4 box-shadow">
        <a href="Desplegar.php?idProd=<?php echo $rs["idProductos"];?>"><img src="<?php echo "data:image/jpeg;base64,".base64_encode($rs["Imagen"]) ?>" alt="" class="card-img-top" style="height: 300px; width: 100%; display: block;"></a>
        
        <p id="Etiqueta" style="text-align: right;"><b><i style="right: 0px;"><?php echo "$".$rs["Precio"].".00 MXN " ; ?></i></b></p>
        <button class="btn btn-ligth" onclick="AgregarCarrito(<?php echo $rs["idProductos"]; ?>)">Agrgar al carrito</button>
      </div>
    </div>
      <?php }
    }else{
      ?>
      <h1 class="textoCentrado">No se encuentran productos con similitudes a el que estas buscando </h1>  
      <?php 
    }
   ?>

    
    
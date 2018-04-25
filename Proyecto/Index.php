<?php
  include('header.php');
 ?> 
    

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"  ></li>
          <li data-target="#myCarousel" data-slide-to="2" ></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
<<<<<<< HEAD
            <img class="d-block" height="600px" width="100%" src="imagenes/banner1.jpg" alt="First slide" >
          </div>
          <div class="carousel-item">
            <img class="d-block" height="600px" width="100%" src="imagenes/banner2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block" height="600px" width="100%" src="imagenes/banner3.jpg" alt="Third slide" >
            <div class="container">
                <div class="carousel-caption">
                  <h1 style="margin-bottom: 100px;">Accesorios Elementales</h1>
                </div>
            </div>
=======
            <a href="Catalogo.php.?Tipo=Caballero"><img class="d-block w-100" height="400" src="imagenes/banner1.jpg" alt="First slide"></a>
          </div>
          <div class="carousel-item ">
            <a href="Catalogo.php.?Tipo=Ninos"><img class="d-block w-100" height="400" src="imagenes/banner2.png" alt="Second slide"></a>
          </div>
          <div class="carousel-item ">
            <a href="Catalogo.php.?Tipo=Accesorios"><img class="d-block w-100" height="400" src="imagenes/banner3.jpg" alt="Third slide"></a>
>>>>>>> 9eba010c6f5b442604c6979b6a9979180843e384
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
<<<<<<< HEAD
      </div class="container">
      <?php 


      ?>
     </div>
=======
      </div>
      
      
      <div class="continer">
        <h3 id="Divisor">Productos Recomendados</h3>
      <?php 
      include_once("Php/Coneccion.php");
      $DB=new ConfigDB();
      $DB->Mysql();

      $consulta=$DB->CONSULTA("SELECT `productos`.`idProductos`,`productos`.`Nombre`, `productos`.`Descripccion`,    `productos`.`Precio`,    `productos`.`Imagen`, `productos`.`NombreTemp`, `productos`.`Tipo` FROM `proyectoweb`.`productos`Limit 4;");
          ?>
         <div class="row" style="margin-top: 10px;">
         <?php
          while ($rs=$DB->Obtener_filas($consulta)) {
           ?>
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img src="<?php echo "data:image/jpeg;base64,".base64_encode($rs["Imagen"]) ?>" alt="" class="card-img-top" style="height: 300px; width: 100%; display: block;">
                <p style="margin-bottom: 30px;"><?php echo $rs["Nombre"]; ?> </p>
                <p id="Etiqueta" style="text-align: right;"><b><i style="right: 0px;"><?php echo "$".$rs["Precio"].".00 MXN " ; ?></i></b></p>
                <button class="btn btn-ligth" onclick="AgregarCarrito(<?php echo $rs["idProductos"]; ?>)">Agrgar al carrito</button>
              </div>
            </div>
     <?php 
          }
        ?>
          </div>
    </div>
>>>>>>> 9eba010c6f5b442604c6979b6a9979180843e384
<?php
  include('footer.php')
 ?>

<?php
  include('header.php');
 ?> </div>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"  ></li>
          <li data-target="#myCarousel" data-slide-to="2" ></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block w-100" src="imagenes/banner1.jpg" alt="First slide">
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100" src="imagenes/banner2.png" alt="Second slide">
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100" src="imagenes/banner3.jpg" alt="Third slide">
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
      <?php w ?>
     </div>
<?php
  include('footer.php')
 ?>

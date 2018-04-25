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
      </div class="container">
      <?php 


      ?>
     </div>
<?php
  include('footer.php')
 ?>

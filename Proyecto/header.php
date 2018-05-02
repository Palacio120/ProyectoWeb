<?php
  session_start();
  $bandera=FALSE;
  if (isset($_SESSION["usuario"])) {
    $bandera=TRUE;
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <!-- seleccion de los tipos de caracter a utilizar -->
    <meta charset="utf-8">
    <!-- dimencion incial y escala de la paguina -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Boutique192</title>
    <!-- archivos css y bootstrap-->
    <link rel="stylesheet" href="css/Main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- scripts de jquery  -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript" src="Javascript/main.js"></script>


  </head>
  <body>
        <div class="header" style="display: block;">
          <nav class="navbar navbar-expand sticky-top navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Boutique192</a>
            <a class="navbar-brand" href="catalogo.php">Catalogo</a>
            <a class="navbar-brand" onclick="NoLog(<?php echo $bandera; ?>)" href="<?php if($bandera){echo 'Carrito.php';}else{echo 'LogUser.php';} ?>" style="position: absolute;right: 75px;  " ><img src="imagenes/carrito.png" alt="Carrito">
            <span style="position: absolute;">
              <?php

              include_once('Php/Coneccion.php');
              $DB= new COnfigDB();
              $DB->Mysql();
              $Num=0;
                if (isset($_SESSION["id"])) {
                  $usuario= $_SESSION["id"];
                  $query=$DB->CONSULTA("SELECT * From Temp where Id_Usuario='$usuario'");
                  while($rs=$DB->Obtener_filas($query)){
                    $Num++;
                  }
                    echo "<p style='border-radius:20px; background-color:red; color:white; position:absolute; width:10px;Float:right'>".$Num."</p>" ;
                }

              ?>

            </span></a>
            <?php if ($bandera) {
              echo "<a class='navbar-brand' href='Php/LogOut.php' style='position: absolute;right: 0px;'><img src='imagenes/LSalida.png' alt='Logout'></a>";
            }else {
              echo "<a class='navbar-brand' href='LogUser.php' style='position: absolute;right: 0px;'><img src='imagenes/LEntrada.png' alt='Login'></a>";
              }?>

          </nav>
        </div>
        <div class="container" style="overflow-x: hidden;">

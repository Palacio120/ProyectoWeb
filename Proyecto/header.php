<?php 
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
    <title>Practiko</title>
    <!-- archivos css y bootstrap-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
        <div class="header">
          <img src="" alt="">
          <nav class="navbar navbar-expand sticky-top navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Adhesivos practiko</a>
            <a class="navbar-brand" href="logUser.php">Login</a>
            <a class="navbar-brand" href="<?php if($bandera){echo('carrito.php');}else{echo('logUser.php');} ?>">Carrito</a>
          </nav>
        </div>
        <div class="container">
          
        

<?php 
	session_start();

	include_once('coneccion.php');
	$DB=new Mysql();

	if (isset($_POST['login'])) {
           $nombre= $_POST['usuario'];
           $contraseña=md5($_POST['password']);

           $query= $DB->CONSULTA("SELECT * from usuarios WHERE Usuario='$nombre' AND password= '$contraseña'");

           while($i=$DB->Obtener_filas($query)){
           		$_SESSION["usuario"]=$nombre;
             	$_SESSION["nombre"]=$row["nombre"];
               	echo "<script>window.location='../Estudiante/principal.php'</script>";
           }
         }
	
 ?>
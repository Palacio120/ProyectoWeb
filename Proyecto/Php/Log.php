<?php 
	session_start();

	include_once('coneccion.php');
	$DB=new configDB();
  $DB->Mysql();


	if (isset($_POST['login'])) {
           $nombre= $_POST['usuario'];
           $Contraseña=md5($_POST['password']);

           $query= $DB->CONSULTA("SELECT * from usuarios WHERE Usuarios='$nombre' AND Contraseña= '$Contraseña'");
           
           while($i=$DB->Obtener_filas($query)){
           		$_SESSION["usuario"]=$nombre;
              $_SESSION["id"]=$i["ID"];
               	echo "<script>window.location='../Index.php'</script>";
           }
         }
	
 ?>
<?php
  /**
   *conexxion simplificada para realizar querrys
   */
  class ConfigDB{
    Private $conn;

    public function Mysql(){
      if (!isset($this->conexion)) {
        $this->conexion= (mysqli_connect("localhost","id5606008_boutique192","Prueba@95")) or die(mysqli_error());
        mysqli_select_db($this->conexion,"id5606008_boutique192") or die(mysql_error());
      }
    }
    public function CONSULTA($Consulta){
      $resultado=mysqli_query($this->conexion, $Consulta);
      if (!($resultado)) {
        echo "Mysql error:" .mysqli_error($this->conexion);

      }
      return $resultado;
    }
    public function Obtener_filas($Consulta){
      return mysqli_fetch_array($Consulta);
    }
    public function total_Filas($Consulta){
      return Mysqli_num_rows($Consulta);
    }

  }

 ?>

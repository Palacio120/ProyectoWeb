<?php
  include('header.php');
 ?>

      <div class="row">
        <div class="col-md-12">
          <div style="margin-top: 20%">
            <div class="container">
              <div class="row">
                <div class="logConter">
                  <h4>Login</h4>
                  <form action="Php/Log.php" method="post">
                    <label>Usuario</label>
                    <input type="text" name="usuario" class="form-control" style="width: 90%;display: inline-block;margin:10px;" required>
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control"  style="width: 90%;display: inline-block;margin:10px;" required><br>
                    <input type="Submit" name="login" value="Submit" id="botonLog" class="btn btn-ligth">
                  </form>
                </div>
                <div class="nuevoUsuario" id="nuevo" >
                <h4>Nuevo Usuario</h4>
                  <form action="Php/nuevoUsuario.php" method="post">
                    <label>Usuario</label>
                    <input type="text" class="form-control" name="Usuario" style="width: 90%;display: inline-block;margin:10px;" required>
                    <label>Contraseña</label>
                    <input type="password" name="Contraseña" class="form-control"  style="width: 90%;display: inline-block;margin:10px;" required><br>
                    <input type="Submit" name="Submit" value="Submit" id="botonLog" class="btn btn-ligth">
                  </form>
                </div>  
              </div>
              
            </div>
            
          </div>
          
          
        </div>
      </div>
<?php
  include('footer.php')
 ?>

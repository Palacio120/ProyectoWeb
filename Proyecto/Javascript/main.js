nuevoUsuario(){
          $.ajax({
                  url:   '../Php/nuevoUsuario.php',
                  type:  'post',
                  success:  function (response) {
                          $("#nuevo").html(response);
                  }
          });
}
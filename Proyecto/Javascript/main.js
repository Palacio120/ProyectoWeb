function NoLog(bol){
		if (!bol) {
			alert('No se encuentra logeado en la plataforma');	
			window.location='index.php';
		}
		
}

function NoLog2(){

	alert('No se encuentra logeado en la plataforma');	
	window.location='LogUser.php';
		
}

function AgregarCarrito(num){
	window.location='Carrito.php?id='+num;
}

function Eliminar(num){
	window.location="Php/EliminarTemp.php?id="+num;
}

function Mostrar_Formato(){
	document.getElementById('Carrito').style.display='none';
	document.getElementById('Formato').style.display='Block';
}

function Consulta(){
          $.ajax({
                  url:   'php/Buscador.php',
                  type:  'post',
                  beforeSend: function () {
                          $("#Ventana").html("Procesando, espere por favor...");
                  },
                  success:  function (response) {
                          $("#Ventana").html(response);
                  }
          });
  }

function Consulta1(tipo){
          var parametros = {
                  "tipo" : tipo
          };
          $.ajax({
                  data:  parametros,
                  url:   'php/Buscador.php',
                  type:  'post',
                  beforeSend: function () {
                          $("#Ventana").html("Procesando, espere por favor...");
                  },
                  success:  function (response) {
                          $("#Ventana").html(response);
                  }
          });
  }
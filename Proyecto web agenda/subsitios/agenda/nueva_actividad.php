<?php
require_once ('../../conexion.php'); 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Mi agenda</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"> 
<link rel="stylesheet" type="text/css" href="../../css/estilos.css">

<script type="text/javascript">
function cancelar() {
	document.formulario.action = "mostrar_agenda.php";
	document.formulario.submit();
}


function agregar() {		

			if(validar_form(document.formulario) == true)
			{
			document.formulario.action = "procesos/agregar.php";
			document.formulario.submit();
			}

	
}

function validar_form(theForm) {
	

	if (theForm.nombre.value == ""){
		alert("El nombre de la actividad es un dato requerido.");
		theForm.nombre.focus();
		return (false);
	}

	if (theForm.fecha.value == ""){
		alert("La fecha de la actividad es un dato requerido.");
		theForm.fecha.focus();
		return (false);
	}

	if (theForm.hora.value == ""){
		alert("La hora de la actividad es un dato requerido.");
		theForm.hora.focus();
		return (false);
	}

	return(true);

}

$(function() {
		  $('#form').on('submit', function (event) {
   	          	event.preventDefault();
		  });
		});

</script>

<style type="">
  body{

  background: url(../../Imagenes/fondo.png);

  }

</style>

</head>
<body>
	<header>
		<nav>
  <div class="toggle"><i class="fas fa-bars menu"></i></div>
  <ul>
    <li><a href="../../index.php">Inicio</a></li>
    <li><a href="mostrar_agenda.php">Agenda</a></li>
    <li><a href="nueva_actividad.php">Agregar Actividad</a></li>
  </ul>
</nav>  
    
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script>
    $(document).ready(function() {
      $(".menu").click(function() {
        $("ul").slideToggle().toggleClass('active');    
      });
    });

</script>

	</header>

	<div class="contenedor_nuevo">
		<form name="formulario" method="post" id="form">
					<span class="titulo_formulario">
				Nueva Actividad
					</span>

						

						<div class="form-group">
 										
			<div class="form-group col-md-4"> 
				<label for="nombre">Nombre Actividad</label> <br>
    			<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el titulo de la actividad">
    		</div>		<br>
			


			<div class="form-group col-md-4"> 
				<label for="nombre">Fecha</label> <br>
    			<input type="date" class="form-control" name="fecha" id="fecha" placeholder="Ingrese la fecha deseada" min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
    		</div>
    					<br>
    		<div class="form-group col-md-4"> 
				<label for="nombre">Hora</label> <br>
    			<input type="time" class="form-control" name="hora" id="hora" placeholder="Ingrese la hora deseada">
    		</div>

    	</div>
    			<br>
    	<div class="form-group "> <br>
    					<input type="submit" class="btn btn-primary"   value="Guardar" onClick="agregar()">
		                <input type="submit" class="btn btn-primary" value="Cancelar" onClick="cancelar()">
		               
		            </div>    
    </form>
</div>


</body>
</html>
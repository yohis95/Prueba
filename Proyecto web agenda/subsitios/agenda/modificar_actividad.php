<?php
require ('../../conexion.php'); 

$id_actividad=$_GET["id_actividad"]; 


$consulta_actividad="SELECT * FROM tbl_actividad WHERE idActividad = $id_actividad";
					$resultado_actividad = mysqli_query($connection , $consulta_actividad);
					if($rs_actividad = mysqli_fetch_array($resultado_actividad))
					{
						$nombre_actividad = $rs_actividad['nombreActividad'];
						$fecha_actividad = $rs_actividad['fecha'];
						$horario_actividad = $rs_actividad['horario'];
						$id_estado = $rs_actividad['idEstado'];
					}


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

<style type="">
  body{

  background: url(../../Imagenes/fondo.png);

  }

</style>

<script type="text/javascript">
function cancelar() {
	document.formulario.action = "mostrar_agenda.php";
	document.formulario.submit();
}


function modificar() {		

			if(validar_form(document.formulario) == true)
			{
			document.formulario.action = "procesos/modificar_actividad.php";
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

	if (theForm.estado.value == ""){
		alert("El estado de la actividad es un dato requerido.");
		theForm.estado.focus();
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
				Modificar actividad
					</span>



						<div class="form-group">
 									
			<div class="form-group col-md-4"> 
				<label for="nombre">Nombre Actividad</label> <br>
    			<input type="text" class="form-control" name="nombre" id="nombre" value="<?=$nombre_actividad?>">
    		</div>	
			
    		<br>

			<div class="form-group col-md-4"> 
				<label for="nombre">Fecha</label> <br>
    			<input type="date" class="form-control" name="fecha" id="fecha" value="<?=$fecha_actividad?>"  min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
    		</div>
    		<br>
    		<div class="form-group col-md-4"> 
				<label for="nombre">Hora</label> <br>
    			<input type="time" class="form-control" name="hora" id="hora" value="<?=$horario_actividad?>">
    		</div>
    		<br>
    		<div class="form-group col-md-4"> <br>
    			<label for="estado">Estado de la actividad</label> <br>
    			<select class="form-control" id="estado" name="estado">
						
    			<?php
    			$consulta_estado = "SELECT * FROM tbl_estado";
    			$resultado_estado = mysqli_query($connection , $consulta_estado);
				while($rs_estado = $resultado_estado -> fetch_assoc()){
					if($id_estado == $rs_estado['idEstado'] ){
						
    			?>
    			<option name="estado" id="estado" selected value="<?=$rs_estado['idEstado']?>"><?=$rs_estado['estado']?> </option>
    			<?php
    			}else{
    				?>
    				<option name="estado" id="estado"  value="<?=$rs_estado['idEstado']?>"><?=$rs_estado['estado']?> </option>
    				<?php
    			}
}
    			?>
    		</select>
    			<br>
    		</div>


					<div class="form-group "> <br>
						<input type="hidden" id="id_actividad" name="id_actividad" value="<?=$id_actividad?>">
		                 <input type="submit" class="btn btn-primary"   value="Modificar actividad" onClick="modificar()" >
		                <input type="submit" class="btn btn-primary" value="Cancelar" onClick="cancelar()">
		               
		            </div>  

    	</div>

		</form>


	</div>
</body>
</html>
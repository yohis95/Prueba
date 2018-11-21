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
<link rel="stylesheet"  href="../../css/estilos.css">


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
  <ul >
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


						
				
	<div class="listado_actividades">	
	
	<table>		
		<tbody>
			<?php
				
				$consulta_actividad="SELECT  tbl_actividad.idActividad, tbl_actividad.nombreActividad, tbl_estado.estado, tbl_actividad.fecha, tbl_actividad.horario FROM tbl_actividad INNER JOIN tbl_estado ON tbl_actividad.idEstado=tbl_estado.idEstado ORDER BY tbl_actividad.idEstado=1";

					$resultado_actividad = mysqli_query($connection , $consulta_actividad);
				
					while($rs_actividad = $resultado_actividad -> fetch_assoc())
					
						{
			
							
						$id_actividad=$rs_actividad ['idActividad'];
						

?>

						<tr> 

						     
							
							<td>   <?php echo $rs_actividad ['nombreActividad']; ?> </td>
							 <td> <?php echo $rs_actividad ['estado']; ?>  </td>
							<td>  <?php echo $rs_actividad ['fecha']; ?> </td>
							<td> <?php echo $rs_actividad ['horario']; ?> </td>
							
							<td><li><a href="modificar_actividad.php?id_actividad=<?=$id_actividad?>&emisor=mostrar_agenda">
							Modificar actividad</a></li></td>
							<td><li><a href="procesos/eliminar_actividad.php?id_actividad=<?=$id_actividad?>">
							Eliminar actividad</a></li></td>
						</tr> 
					
						<?php
					}

					?>
							
			</tbody>
		</table>

</div>	
</body>
</html>
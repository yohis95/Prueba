<?php


require('../../../conexion.php');


		
		
		$nombre = $_POST['nombre'];
		$fecha = $_POST['fecha'];
		$hora = $_POST['hora'];


$consulta_agregar = "INSERT INTO tbl_actividad (nombreActividad, idEstado, fecha, horario) VALUES('$nombre', 2 ,'$fecha', '$hora')";

$resultado_agregar = mysqli_query($connection , $consulta_agregar);


if($resultado_agregar){
	//vuelve a la pagina anterior con exito	
	$consulta_actividad = "SELECT * FROM tbl_actividad ORDER BY idActividad DESC LIMIT 1";
	$resultado_actividad = mysqli_query($connection , $consulta_actividad);
	$rs_actividad = mysqli_fetch_array($resultado_actividad);
	
	$id_actividad= $rs_actividad['idActividad'];

	$pagina = "../mostrar_agenda.php?id_actividad=$id_actividad&emisor=nueva_actividad";
}
else{
	$pagina = "../mostrar_agenda.php?resultado=fracaso";
	
}
		?>


<html>
<head>
<script language="JavaScript">

window.top.location.href="<?=$pagina?>" 
</script>
</head>


</html>


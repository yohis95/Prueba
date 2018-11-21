<?php


require('../../../conexion.php');


		
		
		$nombre = $_POST['nombre'];
		$fecha = $_POST['fecha'];
		$hora = $_POST['hora'];
		$estado = $_POST['estado'];
		$id_actividad = $_POST['id_actividad'];

$consulta_modificar = "UPDATE tbl_actividad SET nombreActividad = '$nombre', fecha = '$fecha', horario = '$hora', idEstado = $estado WHERE idActividad = $id_actividad";

$resultado_modificar = mysqli_query($connection , $consulta_modificar);


if($resultado_modificar){
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
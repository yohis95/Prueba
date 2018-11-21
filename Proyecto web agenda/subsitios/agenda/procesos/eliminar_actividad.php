<?php

require('../../../conexion.php');

$id_actividad = $_GET['id_actividad'];
$consulta = "DELETE FROM tbl_actividad WHERE idActividad = $id_actividad";
$resultado = mysqli_query($connection , $consulta);

if($resultado){
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
<body>

</body>

</html>
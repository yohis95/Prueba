<?php 
			
		$servidor="localhost";
		$usuario="Yoha95";
		$contrasena="yohasofivale";
		$basedatos="agenda";

		$connection = mysqli_connect($servidor, $usuario,$contrasena) or die ("Error de conexion al servidor");
		$db = mysqli_select_db($connection,$basedatos) or die ("Error de conexion a la base de datos");
	
		


 ?>

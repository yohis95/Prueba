<?php
require_once('conexion.php'); 
?>


<!DOCTYPE html>
<html>
<head>
  <title>Mi agenda</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"> 
<link rel="stylesheet" type="text/css" href="css/estilos.css">

<style type="">
  body{

  background: url(Imagenes/fondo.png);

  }
</style>

</head>
<body>
 

    <header>
      <nav>
  <div class="toggle"><i class="fas fa-bars menu"></i></div>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="subsitios/agenda/mostrar_agenda.php">Agenda</a></li>
    <li><a href="subsitios/agenda/nueva_actividad.php">New Activity</a></li>
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
  <div class="imagen-portada">
  <img src="Imagenes/logo.png">
  </div>
</body>
</html>
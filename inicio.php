<?php

    header('Content-Type: text/html; charset=utf-8');
include 'conexion.php';

session_start();

if (!isset($_SESSION) && empty($_SESSION['usuario'])) {
  die('Debes iniciar sesion!!');
}

$idUsuario = $_SESSION['usuario']['id'];
$nombre_usuario = $_SESSION['usuario']['usuario'];

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda</title>
        <link rel="stylesheet" type="text/css" href="css/miestilo.css">
    </head>
    <body>
<div class="topnav" id="myTopnav">
    <a href="inicio.php" class="active">Inicio</a>
  <a href="anotaresultados.php">Anota los Resultados</a>
  <a href="vermiagenda.php">Ver mi agenda</a>
  <a href="sobrenosotros.php">Sobre Nosotros</a>
  <a href="contactar.php">Contactar</a>
  <a href="cerrarsesion.php"class="off">Cerrar Sessión</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

        <div class="contenedor">

            <p>Hola <?php echo $nombre_usuario?><br>
             Esta es  la app de glucosa dónde de permitirá acceder a tu control diario de la diabetes<br><br>
             TUTORIAL <br>
             Primero en la barra de navegación hay 4 botones
             En el primer botón ANOTAR RESULTADOS dónde te permitirá escribir los resultados del dia OJO ya se inserta la fecha actual .
         </p>


        </div>



<script type="text/javascript">
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
    </body>
</html>

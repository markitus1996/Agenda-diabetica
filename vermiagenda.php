
<!DOCTYPE html>
<?php
header('Content-Type: text/html; charset=utf-8');
include 'conexion.php';
// Declaración de variables que se utilizarán más adelante.
// Esta section de codigo PHP no genera salida a la página
// HTML (sin llamada a echo).


session_start();// inicia sesion o restaura una sesion iniciada si esta ya se habia iniciado antes
	// si $_SESSION esta a null y no hay usuario guardado
if(!isset($_SESSION) && empty($_SESSION['usuario'])) {
    die('Inicia sesion primero!');
}
// recogemos el id de usuario que ha iniciado sesion para usarlo mas tarde
$idUsuario = $_SESSION['usuario']['id'];
$nombre_usuario = $_SESSION['usuario']['usuario'];


$sql = "SELECT DATE_FORMAT (fecha , '%d/%m/%y')AS fecha , manyana,insulinam,comida ,insulinac, merienda ,insuliname, cena  ,insulinace ,insulinalenta , dormir , observaciones FROM glucosa WHERE usuario = :usuario ORDER BY fecha DESC ";

$conexion = conectar();
$result = query($conexion, $sql, [
    'usuario' => $idUsuario
]);

?>
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
    <div class="dropdown">
    <button class="dropbtn">Exportar A
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="excel.php">Excel</a>
      <a href="word.php">Word</a>
    </div>
  </div>
  <a href="cerrarsesion.php"class="off">Cerrar Sessión</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<div class="titulomiagenda"/>

   <h3>Estos son tus resultados <?php echo $nombre_usuario?></h3>


   <?php
       if ($result && count($result) > 0) {
           echo "<div id = 'contenedor'>
           <div id ='columna'>FECHA</div>
           <div id ='columna'>MAÑANAS</div>
           <div id ='columna'>UNIDADES INSULINA</div>
           <div id ='columna'>COMIDA</div>
           <div id ='columna'>UNIDADES INSULINA</div>
           <div id ='columna'>MERIENDA</div>
           <div id ='columna'>UNIDADES INSULINA</div>
           <div id ='columna'>CENA</div>
           <div id ='columna'>UNIDADES INSULINA</div>
           <div id ='columna'>UNIDADES LENTA</div>
            <div id ='columna'>ANTES DE IR A DOMIR</div>
           <div id ='columna'>OBSERVACIONES</div>
           ";
           // output data of each rowy
           foreach($result as $row) {
               echo "<div id = 'contenidos'>
              <div id = 'columna'> " . $row["fecha"]. "</div>
              <div id = 'columna'> " . $row["manyana"]. "</div>
              <div id = 'columna'> " . $row["insulinam"]. "</div>
              <div id = 'columna'> " . $row["comida"]. "</div>
              <div id = 'columna'> " . $row["insulinac"]. "</div>
              <div id = 'columna'> " . $row["merienda"]. "</div>
              <div id = 'columna'> " . $row["insuliname"]. "</div>
              <div id = 'columna'> " . $row["cena"]. "</div>
              <div id = 'columna'> " . $row["insulinace"]. "</div>
               <div id = 'columna'> ". $row["insulinalenta"]. "</div>      
              <div id = 'columna'> " . $row["dormir"]. "</div>
              <div id = 'columna'> " . $row["observaciones"]. "</div>
              </div>
";
            }
           echo "</div>";
   } else {

   echo "NO HAY RESULTADO";
   }
     ?>


<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
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

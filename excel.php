<?php
session_start();

include 'conexion.php';

if (!isset($_SESSION) && empty($_SESSION['usuario'])) {
  die('Debes iniciar sesion!!');
}

$idUsuario = $_SESSION['usuario']['id'];
$nombre_usuario = $_SESSION['usuario']['usuario'];


header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename = glucosa.xls");

// $sql = "SELECT id, usuario FROM usuarios";
// $conexion = conectar();
// $result = query($conexion, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi proyecto PHP</title>
        <link rel="stylesheet" type="text/css" href="css/miestilo.css" media="screen,projection">
    </head>
    <body>
          <div class="titulomiagenda" />
   <h3>Estos son tus resultados<?php echo $nombre_usuario; ?>


          <table id = 'contenedor'>
              <th id ='columna'>Fecha</th>
              <th id ='columna'>Mañanas</th>
               <th id ='columna'>Unidades Insulina</th>
              <th id ='columna'>Comida</th>
              <th id ='columna'>Unidades Insulina</th>
              <th id ='columna'>Merienda</th>
              <th id ='columna'>Unidades Insulina</th>
              <th id ='columna'>Cena</th>
              <th id ='columna'>Unidades Insulina</th>
              <th id ='columna'>Madrugada</th>
              <th id ='columna'>Observaciones</th>

        <?php

                    error_reporting(0);
                  $sql = "SELECT DATE_FORMAT (fecha , '%d/%m/%y')AS fecha , manyana,insulinam,comida ,insulinac, merienda ,insuliname, cena  ,insulinace ,insulinalenta , dormir , observaciones FROM glucosa ORDER BY fecha DESC ";
                    $conexion = conectar();
                    $result = query($conexion, $query, [
  
            "fecha" =>$fecha,
            "maniana"=>$manyana,
            "insulinam" => $insulinam,
            "comida"=>$comida,
            "insulinac" => $insulinac,
            "merienda"=>$merienda,
            "insuliname" => $insuliname,
            "cena" =>$cena ,
             "insulinace" => $insulinace,
            "insulinalenta" => $insulinalenta,
            "dormir"=>$dormir,
            "observaciones" =>$observaciones,
            

            ]);
                   
                     foreach($result as $row){


            echo  "<tr>
               <td>" . $row['fecha'] . "</td>
               <td>" . $row['manyana'] . "</td>
               <td>" . $row['insulinam'] . "</td>
               <td>" . $row['comida'] . "</td>
               <td>" . $row['insulinac'] . "</td>
               <td>" . $row['merienda'] . "</td>
               <td>" . $row['insuliname'] . "</td>
               <td>" . $row['cena'] . "</td>
               <td>" . $row['insulinace'] . "</td>
               <td>" . $row['insulinalenta'] . "</td>
               <td>" . $row['madrugada'] . "</td>
               <td>" . $row['observaciones'] . "</td>
              </tr>";

                 }
        ?>

          </table>
    </body>

</html>

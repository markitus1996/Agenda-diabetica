<?php
    header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi proyecto PHP</title>
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

    <div class="divform2">
        <form action="insertardatos.php" class="formr" method="post">
        <h3>Rellene aqui los resultados del dia :</h3>
       
         
        <label>Fecha</label><br>
         <input type="date"  name="fecha" placeholder="Introduce la fecha" required/><br>
         
            <label>Mañanas</label><br>
            <input type="number"  name="maniana" placeholder="Mañana"/><br>
          
             <label>Unidades de insulina</label><br>
            <input type="number" placeholder="Cantidad de insulina" name="insulinam" /><br>
  
         
             <label>Comida</label><br>
            <input type="number"  name="comida" placeholder="Comida"/><br>
            
           <label>Unidades de insulina</label><br>
          <input type="number" placeholder="Cantidad de insulina" name="insulinac" /><br>
  
            
            <label>Merienda</label><br>
            <input type="number"  placeholder="Merienda" name="merienda" /><br>
            
            <label>Unidades de insulina</label><br>
          <input type="number" placeholder="Cantidad de insulina" name="insuliname" /><br>
            
            <label>Cena</label><br>
            <input type="number"  placeholder="Cena" name="cena" /><br>
            
               <label>Unidades de insulina</label><br>
          <input type="number" placeholder="Cantidad de insulina" name="insulinace" /><br>
         
             <label>Unidades Lenta</label><br>
          <input type="number" placeholder="Cantidad de insulina" name="insulinalenta" /><br>
          
              <label>Antes de ir a dormir</label><br>
          <input type="number"  placeholder="Dormir" name="dormir" /><br>
      
           <label>Observaciones</label><br>
          <input type="text" placeholder="Observaciones" name="observaciones" /><br>
          <!--
                    
          
          <label>Unidades de insulina</label><br>
          <input type="number" placeholder="Cantidad de insulina" name="insulinam" /><br>
  
          <input type="number" placeholder="Cantidad de insulina" name="insulinac" /><br>
          <label>Merienda</label><br>
          <input type="number"  placeholder="Merienda" name="merienda" /><br>
          <label>Unidades de insulina</label><br>
          <input type="number" placeholder="Cantidad de insulina" name="insuliname" /><br>
          <label>Cena</label><br>
          <input type="number"  placeholder="Cena" name="cena" /><br>
          <label>Unidades de insulina</label><br>
          <input type="number" placeholder="Cantidad de insulina" name="insulinace" /><br>
          <label>Unidades de insulina LENTA</label><br>
          <input type="number" placeholder="Cantidad de insulina Lenta" name="insulinalenta" /><br>
          <label>Madrugada</label><br>
          <input type="number"  placeholder="Madrugada" name="madrugada" /><br>
          <label>Observaciones</label><br>
          <input type="text" placeholder="Observaciones" name="observaciones" /><br>
         
               -->
          <input type="submit" value="GUARDAR" name="guardar" />
     
      </form>
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

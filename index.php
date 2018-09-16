<?php
    header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda</title>
        <link rel="stylesheet" type="text/css" href="css/miestilo.css">
    </head>
  <header>
      <h3>Tu Agenda Virtual de diabetes</h3>
  </header>
    <body>
    <div class="divform">
      <form action="acceso.php" method="post">
          <h3>Acceda a tu agenda</h3>
          <label>Usuario</label><br>
          <input type="text" placeholder="inserte su usuario" name="usuario" /><br>
          <label>Contraseña</label><br>
          <input type="password" placeholder="inserte su contraseña" name="contrasenia"/><br>
          <input type="submit" name="acceso" value="Acceder"><br>
      </form>
    </div>
        <div class="divform">
            <form action="registrate.php" method="post">
          <h3>¿Aún no tienes tu cuenta? Registrate!</h3>
          <label>Usuario</label><br>
          <input type="text" placeholder="inserte su usuario" name="usuario" /><br>
          <label>Contraseña</label><br>
          <input type="password" placeholder="inserte su contraseña" name="contrasenia"/><br>
          <input type="submit" name="registrar" value="Regitrarse"><br>
            </form>
    
    </body>
</html>

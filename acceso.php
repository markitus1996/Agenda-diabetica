<?php

include 'conexion.php';

// comprobamos si $_POST tiene valores
if (isset($_POST) && !empty($_POST['usuario']) && !empty($_POST['contrasenia'])) {
    //recogemos los datos del formulario mediante POST
    $usuario = $_POST["usuario"];
    // recoge la contraseña y genera un hash md5 de esta
    // asi en la base de datos busca por el usuario y el hash
    // $contrasenya = md5($_POST["contrasenia"]);
   $contrasenya = md5($_POST["contrasenia"]);
} else {
    // si no estan los datos que necesitamos matamos el proceso
    die('No hay datos en $_POST!!!');
}

$query = "SELECT id, usuario FROM usuarios WHERE usuario = :usuario AND contrasenia = :contrasenia";
$conexion = conectar();
$result = query($conexion, $query, [
    'usuario' => $usuario,
    'contrasenia' => $contrasenya
]);

//comprobamos que el usuario y contraseña sean correctos
if($result) {
	/**
	 * Muy importante iniciar sesion y guardar los datos del usuario
	 * para poder consultarlos desde cualquier parte de la aplicacion
	 * sin tener que hacer una consulta a base de datos.
	 *
	 * Buena practica para ahorrarse consultas innecesarias a la base de datos
         * para aumentar el rendimiento de la aplicacion.
	 */
	session_start(); // inicia una sesion
	$_SESSION['usuario'] = $result[0]; // guarda los datos del usuario que ha iniciado sesion
        header("location: inicio.php");
} else {
    header("location: index.php");
}
<?php
include 'conexion.php';


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


$query = "INSERT INTO usuarios (usuario ,contrasenia)VALUES (:usuario, :contrasenia)";
$conexion = conectar();
$filas = execute($conexion, $query, [
    'usuario' => $usuario,
    'contrasenia' => $contrasenya
]);

if($filas == 1) {
    header("location: index.php");
    echo 'insertado correctamente';
}


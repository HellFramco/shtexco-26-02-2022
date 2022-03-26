<?php
require 'datos-usuarios.php';
$misusuarios = new misUsuarios();

$id_usuario = $_SESSION["fotojp"]["id"]; // Código del usuario
$email = $_SESSION["fotojp"]["mmb"]; // Correo del usuario
$nombre = $_SESSION["fotojp"]["nombre"]; // Nombre del usuario
$estado = $_SESSION["fotojp"]["estado"]; // Estado del usuario
$rol = $_SESSION["fotojp"]["typeUser"]; // Tipo de usuario

/** Información del usuario **/
$usuario = $misusuarios->viewUsuario($id_usuario);

if (!$_SESSION) {
    echo '<script language = javascript>
    alert("Usuario no autenticado.")
    self.location = "../index.php"
    </script>';
} elseif ($id_usuario != $usuario[0]['id'] || $rol != "1") {
    session_destroy();
    echo '<script language = javascript>
    self.location = "../index.php"
    </script>';
}

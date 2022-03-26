<?php
require 'datos-usuarios.php';
$misusuarios = new misUsuarios();

$id_usuario = $_SESSION["id"]; // Código del usuario
$email = $_SESSION["mmb"]; // Correo del usuario
$nombre = $_SESSION["nombre"]; // Nombre del usuario
$estado = $_SESSION["estado"]; // Estado del usuario
$rol = $_SESSION["typeUser"]; // Tipo de usuario

/** Información del usuario **/
// $usuario = $misusuarios->viewUsuario($id_usuario);

// if (!$_SESSION) {
//     echo '<script language = javascript>
//     alert("Usuario no autenticado.")
//     self.location = "../index.php"
//     </script>';
// } elseif ($id_usuario != $usuario[0]['id'] || $rol != "2") {
//     session_destroy();
//     echo '<script language = javascript>
//     self.location = "../index.php"
//     </script>';
// }

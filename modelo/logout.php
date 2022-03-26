<?php
session_start();
 
// Desconfigura todos los valores de sesión.
// Unset all of the session variables.
$_SESSION = array();

session_destroy();
session_write_close();
session_regenerate_id();
header("location: ../index.php");
exit();
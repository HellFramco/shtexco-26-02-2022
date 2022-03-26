<?php 
session_start();
if ($_SESSION['id']) {
	session_destroy();
	header('location: ../');
}
else
{
	session_destroy();
	header('location: ../');
	
}
?>
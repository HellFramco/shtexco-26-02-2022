<?php
session_start();
if ($_SESSION['mmb']) {
	
}
else{
	session_destroy();
	header('location: ../index.php');
}

<?php 
	session_start(); // Continua la sesion abierta..
	session_destroy(); // Cierra la sesion actual...
	//session_unset(); // Cierra TODAS las sesiones
	header('Location: index.html');
 ?>
<?php

$name = 'App GitHub';
$user_name = 'root';
$email = 'user@example.com';
$password = '';
$parrafo_1 = 'Este es el ejemplo de un párrafo obtenido desde archivo de configuración';
$parrafo_2 = 'Segundo párrafo en Ubuntu';
$parrafo_8D = "esto es para ti";
if (file_exists('configuration.php')) {
	include_once('configuration.php');
} 

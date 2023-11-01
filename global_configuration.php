<?php

if (file_exists('configuration.php')) {
	include_once('configuration.php');
} else {
	$name = 'App GitHub';
	$user_name = 'root';
	$email = 'user@example.com';
	$password = '';
}

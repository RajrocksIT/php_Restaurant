<?php

//error reporting and warning display.
	error_reporting(E_ALL);
	ini_set('display_errors', 'Off');

	if (!ini_get('date.timezone')) {
		date_default_timezone_set('GMT');
	}


	require_once("db-settings.php"); //Require DB connection
	require_once("functions.php"); // database and other functions are written in this file


?>

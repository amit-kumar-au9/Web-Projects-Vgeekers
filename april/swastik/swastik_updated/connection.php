<?php

	$host = 'localhost';
	$user = 'swastik_123';
	$password = 'oDzUkUiix5lr';
	$db_name = 'swastik_123';

	$conn = mysqli_connect($host, $user, $password, $db_name);

	if(!$conn){

		echo "Connection to Database Failed!";

	}

?>
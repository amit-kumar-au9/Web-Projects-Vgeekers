<?php

	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db_name = 'swastik';

	$conn = mysqli_connect($host, $user, $password, $db_name);

	if(!$conn){

		echo "Connection to Database Failed!";

	}

?>
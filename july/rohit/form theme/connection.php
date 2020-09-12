<?php

	$host = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = 'employee_regis';

	$conn = mysqli_connect($host, $user, $password, $dbname);

	if(!$conn){
		echo "Connection to database failed!";
	}

?>
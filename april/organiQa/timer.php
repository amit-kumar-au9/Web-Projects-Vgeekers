<?php
	include 'include/conn.php';
  	error_reporting(0);
  	session_start();
  	$query="SELECT * FROM deal WHERE id='1'";
    $data= mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    $result=mysqli_fetch_assoc($data);
    $timer=$result['timer'];

    $_SESSION['duration']=$timer;
    $_SESSION['time']=date("Y-m-d H:i:s");
?>
<?php
	include 'include/conn.php';
	$time=$_POST['time'];
	$query1="DELETE FROM wishlist WHERE time='$time'";
	$data1 =mysqli_query($con,$query1);
	if($data1){
		echo "<script>window.location.href = 'wish_display.php';</script>";
	}
	else{
		echo "<script>alert('could not removed');window.location.href = 'wish_dispaly.php';</script>";
	}
?>
<?php
	include 'include/conn.php';
	$m=$_POST['time'];
	$a="cancled";
	$query1="UPDATE orders set status='$a' where time='$m'";
	$data1 =mysqli_query($con,$query1);
	if($data1){
		echo "<script>window.location.href = 'your_orders.php';</script>";
	}
	else{
		echo "<script>alert('could not cancle');window.location.href = 'your_orders.php';</script>";
	}
?>
<?php
	
	require 'dashboard/include/connection.php';
	
	$class_id = $_POST['class_id'];

	$query = "SELECT Distinct subject FROM notes WHERE class='".$class_id."' ";
	$result = mysqli_query($conn,$query);

	echo "<option>-- Select Subject --</option>";

	if(mysqli_num_rows($result) > 0){
	
		while($row=mysqli_fetch_array($result)){
	
			echo '<option value="'.$row['subject'].'">'.$row['subject'].'</option>';
	
		}
	
	}
	else{

		echo '<option value="">Subject not available</option>'; 

	}

?>
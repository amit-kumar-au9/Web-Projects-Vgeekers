<?php
	
	require 'dashboard/include/connection.php';
	
	$class_id = $_GET['class_id'];
	$subject_id = $_POST['subject_id'];

	$query = "SELECT DISTINCT topic FROM notes WHERE class='".$class_id."' AND subject='".$subject_id."'  ";
	$result = mysqli_query($conn,$query);

	echo "<option>-- Select Topic --</option>";

	if(mysqli_num_rows($result) > 0){
	
		while($row=mysqli_fetch_array($result)){
	
			echo '<option value="'.$row['topic'].'">'.$row['topic'].'</option>';
	
		}
	
	}
	else{

		echo '<option value="">Topic not available</option>'; 

	}

?>
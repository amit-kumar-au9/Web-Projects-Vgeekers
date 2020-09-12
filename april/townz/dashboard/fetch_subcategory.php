<?php
	
	require 'include/connection.php';
	
	$category_id = $_POST['category_id'];

	$query = "SELECT id, sub_category FROM sub_category WHERE category_id='".$category_id."' ";
	$result = mysqli_query($conn,$query);

	echo "<option>-- Select Sub Category --</option>";

	if(mysqli_num_rows($result) > 0){
	
		while($row = $result -> fetch_assoc()){
	
			echo '<option value="'.$row['id'].'">'.$row['sub_category'].'</option>';
	
		}
	
	}
	else{

		echo '<option value="">Sub Category not available</option>'; 

	}

?>
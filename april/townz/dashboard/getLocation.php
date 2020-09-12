<?php
	
	require 'include/connection.php';
	
	$city = $_POST['city'];

	$query = "SELECT * FROM city_location JOIN city ON city.id = city_location.city_id WHERE name='".$city."' ";
	$result = mysqli_query($conn,$query);

	echo "<option>-- Select Location --</option>";

	if(mysqli_num_rows($result) > 0){
	
		while($row=mysqli_fetch_array($result)){
	
			echo '<option value="'.$row['location'].'">'.$row['location'].'</option>';
	
		}
	
	}
	else{

		echo '<option value="location">No location saved for this city</option>'; 

	}

?>
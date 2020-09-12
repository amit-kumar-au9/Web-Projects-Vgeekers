<?php include "include/header.php";?>

<div id="page-wrapper">
			<div class="main-page">
				<br>
					<center><h2 class="title1" style="color: green;">City & Location List</h2>		
<table class="responstable" >
  
	<tr style="border:5px solid #024457;">
		<th style="width: auto">S.no.</th>
		<th style="width: auto"><span>City</span></th>
		<th style="width: auto!important">Location</th>
		<th>Update</th>
		<th>Delete</th>	  
		<th style="width:auto">Time Created</th>
	</tr>
	
	<?php 
		include 'include/connection.php';
		$checkCategory = "SELECT name, city_location.id as id, city_id, location, city_location.time_created FROM city JOIN city_location ON city.id = city_location.city_id ORDER BY city_id DESC";
		$resultCategory = mysqli_query($conn, $checkCategory);
		$no = 1;
		while($row = $resultCategory -> fetch_assoc()){
	?>
			<tr>
				<center>
					<form method="post">
						<td><?php echo $no; $no++; ?></td>
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<td><?php echo $row['name']; ?></td>
						<td><input type="text" name="location" value="<?php echo $row['location']; ?>" class="form-control"></td>
						<td><button type="submit" class="btn btn-primary" name="update"><span id="b1">Update</span></button></td>
						<td><button type="submit" class="btn btn-danger" name="delete"><span id="b1">Delete</span></button></td>
					</form>
					<td><?php echo $row['time_created']; ?></td>
				</center>
			</tr>
	<?php 
		}
	?>
	
  </table>
			</div>
		</div>
			
				
		 
				 
		</div>

		<?php include "include/footer.php"?>
<?php
	if(isset($_POST['update'])){

	    $id=$_POST['id'];
	    $location=$_POST['location'];
        $checkQuery = "UPDATE city_location SET location='".$location."' WHERE id='".$id."'";

        mysqli_query($conn, $checkQuery);

        echo "<script>window.location.href='all_city_location.php';</script>";

	}

	if(isset($_POST['delete'])){ //check if form was submitted

	    $id=$_POST['id'];
		$checkQuery = "DELETE FROM city_location WHERE id='".$id."'";
		mysqli_query($conn, $checkQuery);  
        echo "<script>window.location.href='all_city_location.php';</script>";
    }
?>
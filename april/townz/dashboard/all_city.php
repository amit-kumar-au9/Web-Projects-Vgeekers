<?php include "include/header.php";?>
<div id="page-wrapper">
	<div class="main-page">
		<br>
		<center>
			<h2 class="title1" style="color: green;">City List</h2>
			<a href="add_city.php"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2"><span id="b1">ADD CITY</span></button></td> 
		</center>
		</a>
		<table class="responstable" >
			<tr style="border:5px solid #024457;">
				<th style="width: auto">S.no</th>
				<th><span>City Name</span></th>
				<th>Update</th>
				<th>Delete</th>
				<th style="width:auto">Time Created</th>
			</tr>
			<?php 
				include 'include/connection.php';
				$checkCategory = "SELECT * FROM city";
				$resultCategory = mysqli_query($conn, $checkCategory);
				$no = 1;
				while($row = $resultCategory -> fetch_assoc()){
				?>
			<tr>
				<td><?php echo $no; $no++; ?></td>
				<form method="post">
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<td><input type="text" name="category" value="<?php echo $row['name']; ?>" class="form-control"></td>
					<td><button type="submit" class="btn btn-primary" name="update"><span id="b1">Update</span></button></td>
					<td><button type="submit" class="btn btn-danger" name="delete"><span id="b1">Delete</span></button></td>
				</form>
				<td><?php echo $row['time_created'] ?></td>
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
	
	    $category=addslashes($_POST['category']);
	    $id=$_POST['id'];
	       $checkQuery = "UPDATE city SET name='".$category."' WHERE id='".$id."'";
	       mysqli_query($conn, $checkQuery);
	       echo "<script>window.location.href='all_city.php';</script>";
	
	}
	
	if(isset($_POST['delete'])){ //check if form was submitted
	
	    $id=$_POST['id'];
		$checkQuery = "DELETE FROM city WHERE id='".$id."'";
		mysqli_query($conn, $checkQuery); 
		$checkQuery = "DELETE FROM city_location WHERE city_id='".$id."'";
		mysqli_query($conn, $checkQuery);  
	       echo "<script>window.location.href='all_city.php';</script>";
	   }
	?>
<?php 
	if(!isset($_POST['subcategory_id'])){
	 echo "<script>window.location.href='view_subcategory.php';</script>";   
	}
	$subcategory_id = $_POST['subcategory_id'];
	
	include 'include/connection.php';
	
	$checkQuery ="SELECT * FROM sub_category WHERE id = '".$subcategory_id."'";
	$checkResult = mysqli_query($conn, $checkQuery);
	$row = $checkResult -> fetch_assoc();
	
	?>
<?php include "include/header.php";?>
<!-- main content start-->
<div id="page-wrapper">
	<div class="main-page">
		<br>
		<form method="post">
			<div class="container">
				<h2 class="title1" style="color: red;">Sub Category Details</h2>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Name</label>
						<input type="hidden" value="<?php echo $subcategory_id; ?>" name="subcategory_id">
						<input type="text" class="form-control" value="<?php echo $row['sub_category']; ?>" name="sub_category" required>
					</div>
					<div class="form-group col-md-6">
						<label for="inputEmail4">Short Description</label>
						<input type="text" class="form-control" value="<?php echo $row['dsc_short']; ?>" name="dsc_short" required>
					</div>
					<div class="form-group col-md-12">
						<label for="inputEmail4">Long Description</label>
						<textarea type="number" class="form-control" name="dsc" rows="5" required><?php echo $row['dsc']; ?></textarea>
					</div>
					<div class="form-group col-md-6">
						<label>Price</label>
						<input class="form-control" type="number" min="1" placeholder="Enter Price" name="price" required value="<?php echo $row['price']; ?>">
					</div>
					<div class="form-group col-md-6">
						<label>Problem 1</label>
						<input class="form-control" type="text" placeholder="Enter Problem 1" name="problem1" value="<?php echo $row['problem1']; ?>">
					</div>
					<div class="form-group col-md-6">
						<label>Problem 2</label>
						<input class="form-control" type="text" placeholder="Enter Problem 2" name="problem2" value="<?php echo $row['problem2']; ?>">
					</div>
					<div class="form-group col-md-6">
						<label>Problem 3</label>
						<input class="form-control" type="text" placeholder="Enter Problem 3" name="problem3" value="<?php echo $row['problem3']; ?>">
					</div>
					<div class="form-group col-md-6">
						<label>Problem 4</label>
						<input class="form-control" type="text" placeholder="Enter Problem 4" name="problem4" value="<?php echo $row['problem4']; ?>">
					</div>
				</div>
			</div>
			<br>
			<div class="container">
				<div class="one_col">
					<button name="update" type="submit" class="btn btn-success">UPDATE</button>
				</div>
			</div>
		</form>
	</div>
	<span class="clear"></span>
</div>
<?php include "include/footer.php"?>
<?php 
	if(isset($_POST['update'])){
	  
	    $subcategory_id = $_POST['subcategory_id'];
	    
	    $sub_category = $_POST['sub_category'];
	    $dsc = $_POST['dsc'];
	    $dsc_short = $_POST['dsc_short'];
	    $problem1 = $_POST['problem1'];
	    $problem2 = $_POST['problem2'];
	    $problem3 = $_POST['problem3'];
	    $problem4 = $_POST['problem4'];
	    $price = $_POST['price'];
	    
	    $checkQuery = "UPDATE sub_category SET sub_category = '".$sub_category."', dsc = '".$dsc."', dsc_short = '".$dsc_short."' , problem1 = '".$problem1."' , problem2 = '".$problem2."' , problem3 = '".$problem3."' , problem4 = '".$problem4."', price = '".$price."' WHERE id = '".$subcategory_id."'";
	    $checkResult = mysqli_query($conn, $checkQuery);
	    echo "<script>window.location.href='view_subcategory.php';</script>";
	}
	
	?>
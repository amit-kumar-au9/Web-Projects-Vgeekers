<?php include "include/header.php";?>
<style>
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }
    
    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }
    
    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    input:checked + .slider {
      background-color: #2196F3;
    }
    
    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }
    
    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }
    
    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }
    
    .slider.round:before {
      border-radius: 50%;
    }
</style>
<div id="page-wrapper">
	<div class="main-page">
		<br>
		<center><h2 class="title1" style="color: green;">All Reported Problems</h2></center>		
		<table class="responstable">
		  	<thead>
				<tr style="border:5px solid #024457;">
					<th style="width:auto">Sno.</th>
					<th style="width:auto">Customer Id</th>
					<th style="width: 50%">Problem</th>
					<th style="width:30%">Image 1</th>
					<th style="width:30%">Image 2</th>
					<th style="width:auto">Delete</th>
				</tr>
		  	</thead>
		  	<tbody>
		  		<?php 
					include 'include/connection.php';
					$checkQuery = "SELECT * FROM report_problem ORDER BY id DESC";
					$checkResult = mysqli_query($conn, $checkQuery);
					$no = 1;
					while ($row = $checkResult -> fetch_assoc()) {
						$id = $row['id'];
	            ?>
						<tr>
						    <form method="post">
    							<td><?php echo $no++; ?></td>
    							<td><?php echo $row['customer_id']; ?></td>
    							<td><?php echo $row['problem']; ?></td>
    							<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
    							<input type="hidden" value="<?php echo $row['image1']; ?>" name="image1">
    							<input type="hidden" value="<?php echo $row['image2']; ?>" name="image2">
    							<td><a target="_blank" href="assets/images/report_problem/<?php echo $row['image1']; ?>"><img src="assets/images/report_problem/<?php echo $row['image1']; ?>" height="300px"></a></td>
    							<td><?php if($row['image2']){ ?><a target="_blank" href="assets/images/report_problem/<?php echo $row['image2']; ?>"><img src="assets/images/report_problem/<?php echo $row['image2']; ?>" height="300px"></a><?php } ?></td>
    							<td>
    								<button type="submit" class="form-control btn btn-danger" name="delete">Delete</button>
    							</td>
							</form>
						</tr>
				<?php
					}
				?>
		  	</tbody>
		</table>
	</div>
    
<?php include "include/footer.php"?>
<?php 
    if(isset($_POST['delete'])){ //check if form was submitted
    
        $id=$_POST['id'];
    
        if($id!=""){
          $checkQuery = "DELETE FROM report_problem WHERE id='".$id."'";
          if (mysqli_query($conn, $checkQuery)) {
            $image = "assets/images/report_problem/".$_POST['image1'];
            unlink($image);
            $image = "assets/images/report_problem/".$_POST['image2'];
            unlink($image);
            echo "<script>window.location.href='view_report_problem.php';</script>";
          }
          else{
              echo "<script>window.location.href='view_report_problem.php';</script>";
          }    
        }
     }
?>

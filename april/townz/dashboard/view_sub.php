
<?php include "include/header.php";?>

<div id="page-wrapper">
	<div class="main-page">
<br>
				<center><h2 class="title1" style="color: red;">SUB ADMINS</h2></center>
				
				<div class="card" >
					<center><img class="card-img-top" src="images/man.png" alt="Card image"></center>
					<div class="card-body">
					<center>  <h4 class="card-title">John Doe</h4></center>
					 
                    <center> <a href="edit_sub.php" class="btn btn-primary">Edit Profile</a></center>
					  <a href="sub_status.php" class="btn btn-success">Status</a>
					  <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1" >Remove</a>
					</div>
				  </div>
				
				  <div class="card" >
					<center><img class="card-img-top" src="images/woman.png" alt="Card image"></center>
					<div class="card-body">
						<center>  <h4 class="card-title">John Doe</h4></center>
					
					  <center> <a href="edit_sub.php" class="btn btn-primary">Edit Profile</a></center>
					  <a href="sub_status.php" class="btn btn-success">Status</a>
					  <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1" >Remove</a>
					</div>
				  </div>
				  <div class="card">
					<center><img class="card-img-top" src="images/man.png" alt="Card image" ></center>
					<div class="card-body">
						<center>  <h4 class="card-title">John Doe</h4></center>
				
                        <center> <a href="edit_sub.php" class="btn btn-primary">Edit Profile</a></center>
					  <a href="sub_status.php" class="btn btn-success">Status</a>
					  <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1" >Remove</a>
					</div>
				  </div>
				 
		</div>
		<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body">
					<h4>Are you sure you want to remove?</h4>
				 </div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin: 5px;">Yes</button>
				  <button type="button" class="btn btn-primary" data-dismiss="modal" style="margin: 5px;">Back</button>
				</div>
			  </div>
			</div>
		  </div> 
	</div>
		
		</div>		
		  	<?php include "include/footer.php"?>

</div>
			

		  <style type="text/css">
		  	  .card
  {
    width:250px;display: inline-block;margin: 10px
  }
  .btn
  {
    margin:10px;
  }
  .card-img-top
  {
  	width:100px;
  	height: 100px;
  	margin: 10px;
  }
		  </style>

	


<?php include "include/header.php";?>
<div id="page-wrapper">
	<div class="main-page">
		<br>
		<center>
			<h2 class="title1" style="color: red;">Add Location</h2>
		</center>
		<form method="post" class="addSubCategory">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6  column col-sm-offset-0 col-md-offset-2 col-lg-offset-3">
						<div class="form-horizontal">
							<fieldset>
								<!-- Form Name -->
								<!-- Select Basic -->
								<!-- Text input-->
								<div class="form-group">
									<label for="exampleFormControlSelect1">Select City</label>
									<select class="form-control" id="exampleFormControlSelect1" name="city_id">
										<?php 
											include 'include/connection.php';
											$checkCategory = "SELECT * FROM city";
											$resultCategory = mysqli_query($conn, $checkCategory);
											$no = 1;
											while($row = $resultCategory -> fetch_assoc()){
											?>
										<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
										<?php 
											}
											?>
									</select>
								</div>
								<div class="form-group">
									<label class="control-label" for="exampleFormControlSelect1">Name Of Location</label>
									<input type="text" class="form-control" name="location" placeholder="Name of the Location">
								</div>
								<!-- Button (Double) -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="button1id"></label>
									<div class="col-md-8">
										<button class="btn btn-success" type="submit">ADD</button>
										<p id="added" style="display: none">Location Added</p>
										<p id="retry" style="display: none">Please Re try</p>
									</div>
								</div>
							</fieldset>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<?php include "include/footer.php"?>
<script type="text/javascript">
	$('form.addSubCategory').submit(function(e){
	    e.preventDefault();
	    var formdata = $(this).serialize();
	    $.ajax({
	      'type' : 'post',
	      'url' : 'insert_location.php',
	      'data' : formdata,
	      success : function(response){
	        var json = JSON.parse(response);
	        if(!json.error){
	          $('#added').show();
	        }
	        else{
	          $('#retry').show();
	        }
	      }
	    });
	  });
</script>


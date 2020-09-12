<?php include "include/header.php";?>
<div id="page-wrapper">
    <div class="main-page">
        <center>
            <h2 class="title1" style="color: red;">ADD SUB CATEGORY</h2>
        </center>
        <div class="card card-body" style="color:black;width: 100%;background: #fff">
            <form class="addSubCategory">
                <div class="container">
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label for="exampleFormControlSelect1">Select cateogry</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category_id" required>
            					<?php 
            						include 'include/connection.php';
            						$checkCategory = "SELECT * FROM category";
            						$resultCategory = mysqli_query($conn, $checkCategory);
            						$no = 1;
            						while($row = $resultCategory -> fetch_assoc()){
            					?>
            					        <option value="<?php echo $row['id']; ?>"><?php echo $row['category']; ?></option>
            					<?php 
            						}
            					?>
				            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label class="control-label" for="exampleFormControlSelect1">Name Of Sub-Category</label>
                            <input type="text" class="form-control" name="sub_category" placeholder="Name of the Sub-category" required>
                        </div>
                        <div class="form-group col-md-5">
                            <label>Price</label>
                            <input class="form-control" type="number" min="1" placeholder="Enter Price" name="price" required>
                        </div>
                        <div class="form-group col-md-5">
                            <label>Problem 1</label>
                            <input class="form-control" type="text" placeholder="Enter Problem 1" name="problem1">
                        </div>
                        <div class="form-group col-md-5">
                            <label>Problem 2</label>
                            <input class="form-control" type="text" placeholder="Enter Problem 2" name="problem2">
                        </div>
                        <div class="form-group col-md-5">
                            <label>Problem 3</label>
                            <input class="form-control" type="text" placeholder="Enter Problem 3" name="problem3">
                        </div>
                        <div class="form-group col-md-5">
                            <label>Problem 4</label>
                            <input class="form-control" type="text" placeholder="Enter Problem 4" name="problem4">
                        </div>
                        <div class="form-group col-md-5">
                            <label>Logo Image</label>
                            <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*' required>
                        </div>
                        <div class="form-group col-md-5">
                            <label>Description</label>
                            <textarea cols="3" class="form-control" type="text" placeholder="Enter Category name" name="dsc" required></textarea>
                        </div>
                        <div class="form-group col-md-5">
                            <label>Short Description</label>
                            <textarea cols="2" class="form-control" type="text" placeholder="Enter Category name" name="dsc_short" required></textarea>
                         </div>
                        <!-- Button (Double) -->
                        <div class="form-group col-md-12">
                            <button name="button1id" class="btn btn-success" type="submit">ADD</button>
                            <p id="added" style="display: none; color:green"></p>
                            <p id="retry" style="display: none; color:red"></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "include/footer.php"?>
<script type="text/javascript">
        $('form.addSubCategory').submit(function(e){
            e.preventDefault();
            var formdata = new FormData(this);
            formdata.append('form', $(this).attr('class'));
            $.ajax({
              'data' : formdata,
              'url' : 'insert_sub_category.php',
              'type' : 'post',
              'contentType' : false,
              'cache' : false,
              'processData' :false,
              success : function(response){
                var json = JSON.parse(response);
    			if(!json.error){
    			    $('#retry').hide();
    			    $('#added').show();
                    $('#added').html(json.msg);
                }
                else{
                    $('#added').hide();
                    $('#retry').show();
                    $('#retry').html(json.msg);
                }
              }
            });
        });
    //   $('form.addSubCategory').submit(function(e){
    // 		e.preventDefault();
    // 		var formdata = $(this).serialize();
    // 		$.ajax({
    // 			'type' : 'post',
    // 			'url' : 'insert_sub_category.php',
    // 			'data' : formdata,
    // 			success : function(response){
    // 				var json = JSON.parse(response);
    // 				if(!json.error){
    // 				    $('#retry').hide();
    // 				    $('#added').show();
    //                     $('#added').html(json.msg);
    //                 }
    //                 else{
    //                     $('#added').hide();
    //                     $('#retry').show();
    //                     $('#retry').html(json.msg);
    //                 }
    // 			}
    // 		});
    // 	});
</script>
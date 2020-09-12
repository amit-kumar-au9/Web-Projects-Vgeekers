<?php include "include/header.php";?>
<div id="page-wrapper">
    <div class="main-page">
        <center>
            <h2 class="title1" style="color: red;">ADD SERVICE</h2>
        </center>
        <div class="card card-body" style="color:black;width: 100%;background: #fff">
            <form class="addSubCategory">
                <div class="container">
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label for="exampleFormControlSelect1">Select cateogry</label>
                            <select id="category" class="form-control" name="category_id">
                                <option>-- Select Category --</option>
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
                        <div class="col-md-5 form-group">
                            <label for="exampleFormControlSelect1">Select Sub cateogry</label>
                            <select id="subcategorynames" class="form-control" name="sub_category_id">
                                <option>-- Select Sub Category --</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label class="control-label" for="exampleFormControlSelect1">Name Of Services</label>
                            <input type="text" class="form-control" name="name" placeholder="Name of the Services" required>
                        </div>
                        <div class="form-group col-md-5">
                            <label>Price</label>
                            <input class="form-control" type="number" min="1" placeholder="Enter Price" name="price" required>
                        </div>
                        <div class="form-group col-md-5">
                            <label>Logo Image</label>
                            <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*' required>
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

            $('#category').on('change', function(){
                category_id = $(this).val();
                console.log(category_id);
                if(category_id){
                    $.ajax({
                        type:'POST',
                        url:'fetch_subcategory.php',
                        data:'category_id='+category_id,
                        success:function(html){
                            $('select#subcategorynames').html(html);
                        }
                    }); 
                }
                else{
                    $('#subcategorynames').append('<option value=" ">Select Category first</option>');
                }
            });
            
        
        $('form.addSubCategory').submit(function(e){
            e.preventDefault();
            var formdata = new FormData(this);
            formdata.append('form', $(this).attr('class'));
            $.ajax({
              'data' : formdata,
              'url' : 'insert_services.php',
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
</script>
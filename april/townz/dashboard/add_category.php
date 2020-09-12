<?php include "include/header.php";?>
<div id="page-wrapper">
  <div class="main-page">
    <center><h2 class="title1" style="color: red;">ADD CATEGORY</h2></center>
      <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
        <form class="addCategory" enctype="multipart/form-data">
          <div class="container">
            <div class="row">
              <div class="form-group col-md-4">
                <label>Category Name</label>
                <input class="form-control" type="text" placeholder="Enter Category name" name="category" required>
              </div>
              <div class="form-group col-md-4">
                <label>Description</label>
                <input class="form-control" type="text" placeholder="Enter Category name" name="dsc" required>
              </div>
              <div class="form-group col-md-4">
                <label>Short Description</label>
                <input class="form-control" type="text" placeholder="Enter Category name" name="dsc_short" required>
              </div>
              <div class="form-group col-md-4">
                <label>Logo Image</label>
                <input class="btn btn-success" name="UploadLogo" type="file" value="Upload Logo" accept='image/*' required>
              </div>
              <div class="form-group col-md-4">
                <label>Upload Image</label>
                <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*' required>
              </div>
            </div>
            <button class="btn btn-success" type="submit">ADD Category</button>
            <p class="success" style="color:green; font-size:30px"></p>
            <p class="error" style="color:red; font-size:30px"></p>
          </div>
      </form>
      </div>
  </div>
</div> 
<?php include "include/footer.php"?>
<script>
    $('form.addCategory').submit(function(e){
    e.preventDefault();
    var formdata = new FormData(this);
    formdata.append('form', $(this).attr('class'));
    $.ajax({
      'data' : formdata,
      'url' : 'insert_category.php',
      'type' : 'post',
      'contentType' : false,
      'cache' : false,
      'processData' :false,
      success : function(response){
        var json = JSON.parse(response);
        if(!json.error){
            $('p.success').show();
            $('p.success').html(json.message);
            $('p.error').hide();
        }
        else{
            $('p.error').show();
            $('p.error').html(json.message);
            $('p.success').hide();
        }
        
      }
    });
  });
</script>



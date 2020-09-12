<?php 
  include 'include/header.php';
  include 'conn.php';
  error_reporting(0);
  session_start();
  $product_id = $_SESSION['product_id'];
?>
  <div id="page-wrapper" style="background: white;scroll-behavior: smooth;">
    <div class="main-page" style="background: white;">
      <center><h2 class="title1" style="color: red;">ADD IMAGES</h2></center>
      <div class="forms">
        <form style="margin: 10px" class="addImage" enctype="multipart/form-data">
          <div class="form-group col" style="width: 50%">
            <label for="exampleInputEmail1">Product Image</label>
            <input type="file" class="form-control" name="UploadImage" required style="background:lightgrey">
            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
          </div>
          <div class="form-group" style="width: 50%">
            <button type="submit" class="btn btn-primary getImage" style="margin: 10px;">Add</button>
            <p class="success" style="color: green;"></p>
            <p class="error" style="color: red"></p>  
          </div>
        </form> 
      </div>
    </div>
    <div class="main-page" style="background: white;">
      <h2 class="title1" id="view" style="color: red;" align="center">Show Images</h2>
     <div id="image_table"></div>
    </div>
  </div>
<?php include "include/footer.php";?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $('form.addImage').submit(function(e){
    e.preventDefault();
    var formdata = new FormData(this);
    formdata.append('form', $(this).attr('class'));
    $.ajax({
      'data' : formdata,
      'url' : 'insert_image.php',
      'type' : 'post',
      'contentType' : false,
      'cache' : false,
      'processData' :false,
      success : function(response){
        var json = JSON.parse(response);
       
        if(!json.error){
          $('p.success').text(json.message);
          get_images();
        }
        else{
          $('p.error').text(json.message);
        }
      }
    });
  });

 
  function get_images(){
    $.ajax({
      'url' : 'get_images.php',
      success : function(response){
        var json = JSON.parse(response);
        $('#image_table').html(json.content);
      }
    });
  }
  get_images();

  function edit_image(id_el){
    $('#form-edit-'+id_el).show();
    $('#edit_'+id_el).hide();
  }

  function delete_image(id_el){
     $.ajax({
      'type' : 'post',
      'url' : 'delete_image.php',
      'data' : 'image_id='+id_el,
      success : function(response){
        var json = JSON.parse(response);
        if(!json.error){
          $('p.success').text(json.message);
          get_images();
        }
        else{
          $('p.error').text(json.message);
        }
      }
    });
  }

   
</script>
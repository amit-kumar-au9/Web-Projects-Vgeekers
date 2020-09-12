<?php 
  if(!isset($_POST['user_id'])){
   echo "<script>window.location.href='all_vendor.php';</script>";   
  }
  $user_id = $_POST['user_id'];
  
  include 'include/connection.php';
  
  $checkQuery ="SELECT *  FROM vendor_details WHERE user_id = '".$user_id."'";
  $checkResult = mysqli_query($conn, $checkQuery);
  $row = $checkResult -> fetch_assoc();

?>
<?php include "include/header.php";?>
<!-- main content start-->
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
      <div class="container">
          <h2 class="title1" style="color: red;">Change Category</h2>
            <form class="changeCategory">
              <div class="form-group col-md-12">
                <?php 
    		            $someArray = json_decode($row['category'], true);
                    foreach($someArray as $value){
                      $category[] = $value['name'];  
                    }

                    $allCategory = "SELECT * FROM category";
                    $allCategoryResult = mysqli_query($conn, $allCategory);
                    
                    while ($cat_list = $allCategoryResult -> fetch_assoc()) {
                      if(in_array($cat_list['category'], $category)){
                  ?>  
                        <div class="col-md-4" style="padding: 5px">
                          <label class="switch">
                            <input type="checkbox" checked name="id[]" value="<?php echo $cat_list['id'] ?>">
                            <span class="slider round"></span>
                          </label>
                          <label><?php echo $cat_list['category'] ?></label>
                        </div>
                    <?php
                      }
                      else{
                    ?>
                        <div class="col-md-4" style="padding: 5px">
                          <label class="switch">
                            <input type="checkbox" name="id[]" value="<?php echo $cat_list['id'] ?>">
                            <span class="slider round"></span>
                          </label>
                          <label><?php echo $cat_list['category'] ?></label>
                        </div>
                  <?php
                      }
                    }

                ?>
                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                <div class="form-group col-md-12">  
                  <button class="form-control btn btn-primary" type="submit" style="width: auto">UPDATE</button>
                </div>
              </div>
            </form>
          </div>
      </div>
    <br>
  </div>
  <span class="clear"></span>
</div>
<?php include "include/footer.php"?>
<script type="text/javascript">
  $('form.changeCategory').submit(function(e){
    e.preventDefault();
    var formdata = $(this).serialize();
    $.ajax({
      'type' : 'post',
      'url' : 'update_category.php',
      'data' : formdata,
      success : function(response){
        location.reload(true);
      }
    });
  });
</script>

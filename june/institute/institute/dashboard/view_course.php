<?php include 'include/header.php'; ?>
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All Course</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">View/Edit the Courses</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Class/Subject</th>
                      <th class="text-primary">Price</th>
                      <th class="text-primary">Short Dsc</th>
                      <!--<th class="text-primary">Show</th>-->
                      <th class="text-primary">Image</th>
                      <th class="text-primary">Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Class/Subject</th>
                      <th class="text-primary">Price</th>
                      <th class="text-primary">Short Dsc</th>
                      <th class="text-primary">Show</th>
                      <th class="text-primary">Image</th>
                      <th class="text-primary">Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      include 'include/connection.php';
                      $checkCourse = "SELECT * FROM course";
                      $resultCourse = mysqli_query($conn, $checkCourse);
                      $no = 1;
                      while ($row = $resultCourse -> fetch_assoc()) {
                        $id = $row['id'];
                    ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row['class']; ?></td>
                          <td><?php echo $row['price']; ?></td>
                          <td><?php echo $row['dsc']; ?></td>
                          <td>
                            <label class="switch">
                            <input type="checkbox" name="is_show" <?php if($row['is_show'] == '1'){ echo "checked";} ?> onclick="change_is_show(<?php echo $id; ?>)">
                            <span class="slider round"></span>
                            </label>
                          </td>
                          <td><img src="../img/course/<?php echo $row['image']; ?>" width="300px"></td>
                          <td align="center">
                            <form action="edit_course.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <button class="btn btn-warning btn-circle" type="submit"><i class="fa fa-edit"></i></button>
                            </form>
                            <form method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                              <button class="btn btn-danger btn-circle" type="submit" name="deleteImage"><i class="fas fa-trash"></i></button>
                            </form>
                          </td>
                        </tr>
                    <?php 
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

<script>
  function change_is_show(course_id){
    $.ajax({
        'type' : 'post',
        'data' : 'course_id='+course_id,
        'url' : 'update_course_is_show.php',
        success : function(response){
           location.reload(true);
        }
    });
  }
</script>
</script>
<?php include 'include/footer.php'; ?>

<?php

  if(isset($_POST['deleteImage'])){ //check if form was submitted

      $checkQuery = "DELETE FROM course WHERE id='".$_POST['id']."'";
      if (mysqli_query($conn, $checkQuery)) {
        $image = "../img/course/".$_POST['image'];
        unlink($image);
      }
      echo "<script>window.location.href='view_course.php';</script>";    
  }

?>
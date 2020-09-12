<?php include "include/header.php";?>
<?php 
  include 'include/connection.php'; 
  $checkQuery = "SELECT * FROM basic_data WHERE id = 3";
  $checkResult = mysqli_query($conn, $checkQuery);
  $row = $checkResult -> fetch_assoc();

?>

<div id="page-wrapper">
  <div class="main-page">
    <form method="post">
      <br>
      <center><h2 class="title1" style="color:red;">Update How It Works</h2>
      <div class="form-group">
        <!-- <label for="exampleFormControlInput1">About EPS SCHOOL Block 1</label> -->
        <textarea rows="3" class="form-control form-control-line" placeholder="Write Your text here" name="content" id="TypeHere" required><?php echo $row['content']; ?></textarea>
      </div>
      <button id="button1id" class="btn btn-success" type="submit" name="update">Update</button>
    </form>
  </div>
</div>
<?php include "include/footer.php"?>

<?php 

  if(isset($_POST['update'])){

    $content = addslashes($_POST['content']);

    $checkQuery = "UPDATE basic_data SET content = '".$content."' WHERE id = 3";
    mysqli_query($conn, $checkQuery);
    echo "<script>window.location.href='update_how_it_works.php';</script>";

  }

?>


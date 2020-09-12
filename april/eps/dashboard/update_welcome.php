<?php include "include/header.php";?>
	<div id="page-wrapper">
		<div class="main-page">
			<center><h2 class="title1" style="color: red;">HOME -> WELCOME TO EPS PUKAR</h2></center>
      <?php 
        include 'include/connection.php';
        $checkQuery = "SELECT * FROM home";
        $checkResult = mysqli_query($conn, $checkQuery);
        $row = $checkResult -> fetch_assoc();

      ?>
			<form method="post">
        <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
          <div class="form-group">
            <label for="exampleFormControlInput1">Welcome Heading</label>
            <textarea rows="5" class="form-control form-control-line" placeholder="Write Your text here" name="welcome_heading" id="TypeHere" required><?php echo $row['welcome_heading']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Welcome Content</label>
            <textarea rows="5" class="form-control form-control-line" placeholder="Write Your text here" name="welcome_content" id="TypeHere1" required><?php echo $row['welcome_content']; ?></textarea>
          </div>
          <button class="btn btn-success" type="submit" name="update">UPDATE</button>
        </div>
      </form>
		</div>
	</div>
<?php include "include/footer.php";?>

<?php 

// Update Welcome
if (isset($_POST['update'])) {

  $welcome_heading = addslashes($_POST['welcome_heading']);
  $welcome_content = addslashes($_POST['welcome_content']);

  if($welcome_content!="" && $welcome_heading!=""){
    $checkQuery = "UPDATE home SET welcome_heading = '".$welcome_heading."', welcome_content = '".$welcome_content."' WHERE id = 1 ";  

    if (mysqli_query($conn, $checkQuery)) {
              echo "<script>window.alert('Welcome Updated');window.location.href='update_welcome.php';</script>";
    }

    else{
        echo "<script>window.alert('Please Retry');window.location.href='update_welcome.php';</script>";
    }
  }
  else{
        echo "<script>window.alert('Cannot be empty');window.location.href='update_welcome.php';</script>";
    }

}

?>

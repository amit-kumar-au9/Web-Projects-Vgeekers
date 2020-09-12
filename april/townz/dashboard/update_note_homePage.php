<?php include "include/header.php";?>
<div id="page-wrapper">
  <div class="main-page">
    <center><h2 class="title1" style="color: red;">Note: Home Page</h2></center>
      <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
        <form method="post">
          <div class="container">
            <div class="row">
                <?php 
                    include 'include/connection.php';
                    $checkReward = "SELECT * FROM customer_basic_data WHERE id = 4";
                    $resultReward = mysqli_query($conn, $checkReward);
                    $row = $resultReward -> fetch_assoc();
                ?> 
              <div class="form-group col-md-12">
                <label>Note: Home Page</label>
                <textarea class="form-control" type="text" rows="6" name="content" required><?php echo $row['content'] ?></textarea>
              </div>
            </div>
            <button class="btn btn-success" type="submit" name="update">UPDATE</button>
          </div>
      </form>
      </div>
  </div>
</div> 
<?php include "include/footer.php"?>
<?php 
    if (isset($_POST['update'])) {

        $content = addslashes($_POST['content']);
        $checkQuery = "UPDATE customer_basic_data SET content = '".$content."' WHERE id = 4";
        mysqli_query($conn, $checkQuery);
        echo "<script>window.location.href='update_note_homePage.php';</script>";       

    }
?>
<?php include "include/header.php";?>
  <div id="page-wrapper">
    <div class="main-page">
      <center><h2 class="title1" style="color: red;">HOME -> UPCOMING INFRASTRUCTURE</h2></center>
      <?php 
        include 'include/connection.php';
        $checkHomeIntro = "SELECT * FROM home";
        $resultHomeIntro = mysqli_query($conn, $checkHomeIntro);
        $row = $resultHomeIntro -> fetch_assoc();
      ?>
      <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
        <div class="form-group">
          <form method="post">
            <label for="exampleFormControlInput1">UPCOMING INFRASTRUCTURE</label>
            <textarea rows="5" class="form-control form-control-line" placeholder="Write Your text here" name="infra" id="TypeHere" required><?php echo $row['infra']; ?></textarea>
            <button class="btn btn-success" name="updateInfra" type="submit">UPDATE</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php include "include/footer.php";?>

<?php 

if(isset($_POST['updateInfra'])){

    $infra=addslashes($_POST['infra']);

    if ($infra!="") {
        $checkQuery = "UPDATE home SET infra='".$infra."' WHERE id='1'";

        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('INFRASTRUCTURE info Changed');window.location.href='update_infra.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='update_infra.php';</script>";
        }
    }
    else{
        echo "<script>window.alert('Cannot be empty');window.location.href='update_infra.php';</script>";
    }
}

?>

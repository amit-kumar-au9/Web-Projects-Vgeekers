<?php include "include/header.php";?>
    <div id="page-wrapper">
        <div class="main-page">
            <center><h2 class="title1" style="color: red;">Facility & Attraction</h2></center>
            <?php 
                include 'include/connection.php';
                $checkHomeIntro = "SELECT * FROM home";
                $resultHomeIntro = mysqli_query($conn, $checkHomeIntro);
                $row = $resultHomeIntro -> fetch_assoc();
            ?>
          <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
            <div class="form-group">
              <form method="post">
                <label for="exampleFormControlInput1">Facility and Attraction</label>
                <textarea rows="5" class="form-control form-control-line" placeholder="Write Your text here" name="attraction" id="TypeHere" required><?php echo $row['attraction']; ?></textarea>
                <button class="btn btn-success" name="updateGlance" type="submit">UPDATE</button>
              </form>
            </div>
          </div>
        </div>
    </div>
<?php include "include/footer.php";?>

<?php 

if(isset($_POST['updateGlance'])){

    $attraction=addslashes($_POST['attraction']);

    if ($attraction!="") {
        $checkQuery = "UPDATE home SET attraction='".$attraction."' WHERE id='1'";

        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Facility and Attraction Changed');window.location.href='update_facility.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='update_facility.php';</script>";
        }
    }
    else{
        echo "<script>window.alert('Cannot be empty');window.location.href='update_facility.php';</script>";
    }
}

?>

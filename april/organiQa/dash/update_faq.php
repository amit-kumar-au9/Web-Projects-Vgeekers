<?php include "include/header.php";?>
	<div id="page-wrapper" style="background: white">
		<div class="main-page" style="background: white;">
		    <?php 
		        include 'conn.php';
		        $checkPrivacy = "SELECT * FROM detail WHERE id = 4";
		        $checkResult = mysqli_query($con, $checkPrivacy);
		        $row = $checkResult -> fetch_assoc();
		    ?>
			<center><h2 class="title1" style="color: red;">FAQs</h2></center>
			<div class="forms">
    			<form style="margin: 10px" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea rows="12" class="form-control" placeholder="Write Your text here" name="contents" id="TypeHere"  required><?php echo $row['content']; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin: 10px;" name="addTestimonial">UPDATE</button>
                </form>	
			</div>
		</div>
	</div>
<?php include "include/footer.php";?>

<?php 

  if(isset($_POST['addTestimonial'])){ //check if form was submitted

        include 'conn.php';
        $content = addslashes($_POST['contents']);
        
        if ($content !="") {
            $checkQuery = " UPDATE detail SET content = '".$content."' WHERE id = 4 ";
    
            if (mysqli_query($con, $checkQuery)) {
                echo "<script>window.alert('FAQs Updated');window.location.href='update_faq.php';</script>";
            }
            else{
                echo "<script>window.alert('Please Retry');window.location.href='update_faq.php';</script>";
              }
        }
        
    }

?> 
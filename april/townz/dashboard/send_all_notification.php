<?php include "include/header.php";?>

<div id="page-wrapper">
	<div class="main-page">
		<br>
		<center>
			<h2 class="title1" style="color:green;">Send <span id="na"></span>Notifications To ALL Vendor </h2>
		</center>
		<div>
		    <form method="post">
    			<div class="form-group col-md-12">
					<label for="exampleFormControlTextarea1">Title</label>
				    <input type="text" class="form-control" name="title" placeholder = "Write Notification Title" required>
    			</div>
    			<div class="form-group col-md-12">
    				<label for="exampleFormControlTextarea1">Notification Content</label>
    				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder = "Write Notification Content Here" name="body"></textarea>
    			</div>
    			<div class="form-group col-md-12">
    				<label class="col-md-3 control-label" for="button1id"></label>
    				<div class="col-md-8">
    					<button id="button1id" name="send" class="btn btn-success" type="submit">SEND</button>
    				</div>
    			</div>
			</form>
		</div>
	</div>
</div>
<?php include "include/footer.php"?>
<?php 
    include 'include/connection.php';
    if(isset($_POST['send'])){
        $token = array();
        $user = array();
        $checkQuery = "SELECT * FROM vendor_details";
        $checkResult = mysqli_query($conn, $checkQuery);
        while($row = $checkResult -> fetch_assoc()){
            $user[] = $row['user_id'];
            $token[] = $row['token'];
        }
        
        $title = $_POST['title'];
        $body = $_POST['body'];
    	include '../api/notification.php';
    	send_notification($body, $title, $token);
    	include '../api/insert_notification.php';
    	set_notification($body, $title, $user);
    
    
        echo "<script>window.alert('Notification Send');window.location.href='index.php';</script>";
    }
?>

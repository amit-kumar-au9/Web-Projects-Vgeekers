<?php include "include/header.php";?>
<?php
    if(!isset($_POST['user_id'])){
        echo "<script>window.location.href='view_all_customer.php';</script>";
    }
?>
<div id="page-wrapper">
	<div class="main-page">
		<br>
		<center>
			<h2 class="title1" style="color:green;">Send <span id="na"></span> Customer Notifications</h2>
		</center>
		<div>
		    <form method="post">
    			<div class="form-group">
    				<div>                     
    					<label for="exampleFormControlTextarea1">Title</label>
    					<input type="hidden" name="user_id" value="<?php echo $_POST['user_id']; ?>">
    					<input type="hidden" name="token" value="<?php echo $_POST['token']; ?>">
    				    <input type="text" class="form-control" name="title" placeholder = "Write Notification Title" required>
    				</div>
    			</div>
    			<div class="form-group">
    				<label for="exampleFormControlTextarea1">Notification Content</label>
    				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder = "Write Notification Content Here" name="body"></textarea>
    			</div>
    			<div class="form-group">
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
        $token = array($_POST['token']);
        $user = array($_POST['user_id']);
        
        $title = $_POST['title'];
        $body = $_POST['body'];
    	include '../api/customer/notification.php';
    	send_notification($body, $title, $token);
    	include '../api/customer/insert_notification.php';
    	set_notification($body, $title, $user);
    
        echo "<script>window.alert('Notification Send');window.location.href='view_all_customer.php';</script>";
    }
?>

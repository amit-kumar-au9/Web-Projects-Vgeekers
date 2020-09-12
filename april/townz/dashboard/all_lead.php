<?php include "include/header.php";?>
<div id="page-wrapper">
	<div class="main-page">
		<br>
		<center>
			<h2 class="title1" style="color: green;">VIEW LEADS</h2>
		</center>
        <div class="form-group col-md-4">
            <label for="exampleFormControlSelect1">Select cateogry</label>
            <select class="form-control" name="category" id="getCategory">
                <option >Select Category</option>
                <option value="all">All Lead</option>
              <?php 
                include 'include/connection.php';
                $checkCategory = "SELECT * FROM category";
                $resultCategory = mysqli_query($conn, $checkCategory);
                while($row = $resultCategory -> fetch_assoc()){
                    echo "<option value='".$row['category']."'>".$row['category']."</option>";
                }
              ?>
            </select>
        </div>
        <div id="category_table" class="col-md-12"></div>
	</div>
</div>
</div>
<?php include "include/footer.php"?>
<script>

	var category = '';
	$('#getCategory').on('change', function(){
        category = $(this).val();
        $.ajax({
            type:'POST',
            url:'get_lead_by_category.php',
            data:'category='+category,
            success : function(response){
                var json = JSON.parse(response);
                console.log(json);
                $('div#category_table').html(json.content);
            }
        });
    });
    
//     $('form.updateComplete').submit(function(e){
// 		e.preventDefault();
// 		var formdata = $(this).serialize();
// 		$.ajax({
// 			'type' : 'post',
// 			'url' : 'complete_lead.php',
// 			'data' : formdata,
// 			success : function(response){
// 				var json = JSON.parse(response);
// 				if(!json.error){
// 					$('div.e-msg-submit').addClass('success').removeClass('error').text(json.message);
// 					$('#rzp-button1').show();
// 				}
// 				else{
// 					$('div.e-msg-submit').addClass('error').removeClass('success').text(json.message);
// 					$('#rzp-button1').hide();
// 				}
// 			}
// 		});
// 	});
	
// 	$('form.delete').submit(function(e){
// 		e.preventDefault();
// 		var formdata = $(this).serialize();
// 		$.ajax({
// 			'type' : 'post',
// 			'url' : 'delete_lead.php',
// 			'data' : formdata,
// 			success : function(response){
// 				var json = JSON.parse(response);
// 				if(!json.error){
// 					$('div.e-msg-submit').addClass('success').removeClass('error').text(json.message);
// 					$('#rzp-button1').show();
// 				}
// 				else{
// 					$('div.e-msg-submit').addClass('error').removeClass('success').text(json.message);
// 					$('#rzp-button1').hide();
// 				}
// 			}
// 		});
// 	});
	
</script>
<?php

    if(isset($_POST['complete'])){ //check if form was submitted

        $lead_id=$_POST['id'];
        $user_id=$_POST['user_id'];
        $lead_name = $_POST['name'];
        if($lead_id!=""){
            $checkQuery = "UPDATE lead SET status = 'Completed', is_accept = '2' WHERE id='".$lead_id."'";
            mysqli_query($conn, $checkQuery);
            
            $body = "Lead is Completed";
    	    $title = $lead_name;
        	$checkToken = "SELECT * FROM vendor_details WHERE user_id = '".$user_id."'";
        	$ResultToken = mysqli_query($conn, $checkToken);
        	$row = $ResultToken -> fetch_assoc();
        	
        	$token = array($row['token']);
        	$user = array($user_id);
        	
        	include '../api/notification.php';
          	send_notification($body, $title, $token);
          	include '../api/insert_notification.php';
          	set_notification($body, $title, $user);
            
            echo "<script>window.location.href='all_lead.php';</script>";
        }
    }
    
    if(isset($_POST['delete'])){ //check if form was submitted

        $id=$_POST['id'];
    
        if($id!=""){
            $checkQuery = "DELETE FROM lead WHERE id='".$id."'";
            mysqli_query($conn, $checkQuery);
            echo "<script>window.location.href='all_lead.php';</script>";
        }
    }
?>
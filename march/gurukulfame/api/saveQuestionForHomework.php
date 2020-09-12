 
 <?php 

require 'connection.php';

$userId=$_POST['userId'];
$class=$_POST['class'];
$batch=$_POST['batch'];
$isQuestion=$_POST['isQuestion'];
$question=$_POST['question'];

date_default_timezone_set('Asia/Kolkata');
$date = date('d/m/Y');

$checkHomework = "SELECT * FROM homework WHERE class='".$class."' AND batch='".$batch."' AND date='".$date."'";
$resultHomework = mysqli_query($conn, $checkHomework);

if(mysqli_num_rows($resultHomework)==1){

	$row = $resultHomework -> fetch_assoc();
	$homeworkid = $row['homeworkid'];

}

else{

	$checkHomework = "INSERT INTO homework (date, class, batch) VALUES ('".$date."', '".$class."', '".$batch."')";
	$resultHomework = mysqli_query($conn, $checkHomework);
	$homeworkid = mysqli_insert_id($conn);

}

if($isQuestion == "true"){

	$checkQuestion = "INSERT INTO question (homeworkid, question, link) VALUES ('".$homeworkid."', '".$question."','')";
	
}
else{

	$rand = rand(10000, 99999);
            
    $file_name = $rand.$_FILES['questionImage']['name'];
    $file_tem_loc = $_FILES['questionImage']['tmp_name'];
    $file_store = "images/homework/".$file_name;
    $file_upload = false;
    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    if($file_upload){
        $checkQuestion = "INSERT INTO question (homeworkid, question, link) VALUES ('".$homeworkid."', '','".$file_name."')";
        if(mysqli_query($conn, $checkQuery)){
            $response['errorCode'] = '0000';
            $response['errorMessage'] = 'Homework Image Uploaded';        
        }else{
            $response['errorMessage'] = 'Homework Image Not Uploaded';        
        }
    }
}

if(mysqli_query($conn, $checkQuestion)){

	$response['errorCode'] = '0000';
	$response['errorMessage'] = 'Homework Uploaded';

}
else{
	
	$response['errorCode'] = '0001';
	$response['errorMessage'] = 'Homework Not Uploaded';

}

echo json_encode($response);

 ?>

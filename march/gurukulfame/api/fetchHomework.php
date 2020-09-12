
<?php
	require 'connection.php';
	$userId = $_POST['userId'];
	$date = $_POST['date'];

	$checkQuery = "SELECT * FROM userDetail WHERE id='".$userId."' ";
    $checkResult = mysqli_query($conn, $checkQuery);
    
	$row = $checkResult->fetch_assoc();
	$class = $row['class'];
	$batch = $row['batch'];

	$checkQuery = "SELECT * FROM homework WHERE class='".$class."' AND batch='".$batch."'AND date='".$date."' ";
    $checkResult = mysqli_query($conn, $checkQuery);

    $row = $checkResult->fetch_assoc();
    $homeworkid=$row['homeworkid'];

	$checkQuery = "SELECT * FROM questions WHERE homeworkid='".$homeworkid."'";

    $checkResult = mysqli_query($conn, $checkQuery);
    
    $no_rows=mysqli_num_rows($checkResult);
    
    if($no_rows>0){
        
        $response['errorCode'] = '0000';
        $response['errorMessage'] = 'Homework Send';
            
        for($quesno=1;$quesno<=$no_rows;$quesno++){
            
            $row = $checkResult->fetch_assoc();
            if($row['question']!=''){
                $response['content'][] =["isQuestionAvailable" => 1 , "question" => $row['question'], "imageUrl" => ''];    
            }
            else{
                $response['content'][] =["isQuestionAvailable" => 0 , "question" => '', "imageUrl" => 'http://vgeekersinfotech.com/revised/images/homework/'.$row['link']];    
            }
        }
    }
    else{
        $response['errorCode'] = '0001';
        $response['errorMessage'] = 'No homework';
        $response['content'][] =["isQuestionAvailable" => "" , "question" => "", "imageUrl" => ""];
    }

	echo json_encode($response);
?>

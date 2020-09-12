<?php

    include 'include/connection.php';   

    $class = $_POST['class'];
    $batch = $_POST['batch'];
    $date = $_POST['date'];
    $date=date('d/m/Y',strtotime($date));

    $error = true;
    $message = array();
    $response = array();

    $checkQuery = "SELECT * FROM attendance JOIN userDetail ON userDetail.id=attendance.studentid WHERE attendance.date='".$date."' AND userDetail.batch='".$batch."' AND userDetail.class='".$class."'";
    $checkResult = mysqli_query($conn, $checkQuery);
    if(mysqli_num_rows($checkResult) < 1){
        
       $error = true;
       $message = 'No Data Found!';
        
    }
    else{
        
        $error = false;
        while($checkRow = mysqli_fetch_array($checkResult)){
            $attendance="Present";
            if($checkRow['attendance']=="0"){
                $attendance="Absent";
            }
            array_push($message, array('id' =>  $checkRow['id'], 'name' => $checkRow['name'], 'attendance' => $attendance));
        }
        
    }
    
    $response['error'] = $error;
    $response['message'] = $message;
    
    echo json_encode($response);
        
?>
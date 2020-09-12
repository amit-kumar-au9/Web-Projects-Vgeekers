<?php 
    
    require 'include/connection.php';
    
    $attendance = implode(",", $_POST['attendance']);
    
    $class = $_POST['class'];
    $batch = $_POST['batch'];
    
    $student_ids = array();
    
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d/m/Y');
    
    $student_attendance = explode(",", $attendance);

    $studentQuery = "SELECT id FROM userDetail WHERE class= '$class' AND batch = '$batch' ";
    $studentResult = mysqli_query($conn, $studentQuery);
    
    while($studentRow = mysqli_fetch_array($studentResult)){
        array_push($student_ids, $studentRow['id']);
    }
    
    $new_student_ids = implode(",", $student_ids);
    $student_ids_separated = explode(",", $new_student_ids);
    
    print_r($student_ids_separated);

    foreach ($student_attendance as $key => $value) {
        
        foreach($student_ids_separated as $key1 => $value1){
        
            if($value == $value1){
                
                $checkQuery = "SELECT * FROM attendance WHERE studentid = '$value' AND date = '$date' ";
                $checkResult = mysqli_query($conn, $checkQuery);
                
                if(mysqli_num_rows($checkResult) < 1){
            
                    $insertQuery = "INSERT INTO attendance (studentid, date, attendance) VALUES ('$value', '$date', 1)";
            	    $insertResult = mysqli_query($conn, $insertQuery);
            	    
                }
                else{
                        
                    $updateQuery = "UPDATE attendance SET attendance = 1 WHERE studentid = '$value' AND date = '$date' ";
                    $updateResult = mysqli_query($conn, $updateQuery);
                    
                }
                
            }
            else{
                
                $checkQuery = "SELECT * FROM attendance WHERE studentid = '$value1' AND date = '$date' ";
                $checkResult = mysqli_query($conn, $checkQuery);
                
                if(mysqli_num_rows($checkResult) < 1){
            
                    $insertQuery = "INSERT INTO attendance (studentid, date, attendance) VALUES ('$value1', '$date', 0)";
            	    $insertResult = mysqli_query($conn, $insertQuery);
            	    
                }
                else{
                        
                    continue;
                    
                }
                
            }
        }
    }
    
?>
<?php 
    
    include 'include/connection.php';
    
    $course_id = $_POST['course_id'];
    
    $checkShow = "SELECT * FROM course WHERE id = '".$course_id."'";
    $resultShow = mysqli_query($conn, $checkShow);
    $row = $resultShow -> fetch_assoc();
    $is_show = $row['is_show'];

    $updateShow = "UPDATE course SET is_show = '1' WHERE id = '".$course_id."'";    
    
    if($is_show == '1'){
        $updateShow = "UPDATE course SET is_show = '0' WHERE id = '".$course_id."'";
    }
    
    mysqli_query($conn, $updateShow);

?>
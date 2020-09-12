<?php 
    include '../include/connection.php';
    include '../include/session.php';
    
    $response['error'] = true;
    $response['message'] = "User name already exist";
    
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $checkUsername = "SELECT * FROM user_details WHERE username = '".$username."' AND id != '".$id."'";
    if(mysqli_num_rows(mysqli_query($conn, $checkUsername)) < 1){
        $response['message'] = "User name Changed";
        $response['error'] = false;
        $checkQuery = "UPDATE user_details SET username = '".$username."' WHERE id = '".$id."' ";
        if($password != ""){
            $checkQuery = "UPDATE user_details SET username = '".$username."', password = '".md5($password)."' WHERE id = '".$id."' ";
        }
        mysqli_query($conn, $checkQuery);
    }
    
    
    echo json_encode($response);
?>
<?php 
    include '../include/connection.php';
    include '../include/session.php';

    $response['error'] = true;
    $response['message'] = "User name already exist";     

    $username = $_POST['username'];
    $site_id = $_POST['site_id'];
    $password = addslashes($_POST['password']);
    $cpassword = addslashes($_POST['cpassword']);
    
    $checkUsername = "SELECT * FROM user_details WHERE username = '".$username."'";
    if(mysqli_num_rows(mysqli_query($conn, $checkUsername)) == 0){
        $response['message'] = "Password and Confirm Password Doesnot match";     

        if($password == $cpassword and $password != ""){

            $response['message'] = "Sorry Try Again";   

            $checkQuery = "INSERT INTO user_details (username, password, site_id, type, created_by) VALUES ('".$username."', '".md5($password)."', '".$site_id."', 'sub_admin', '".$login_id."') ";  
            if(mysqli_query($conn, $checkQuery)){
                $response['error'] = false;
                $response['message'] = "New Sub Admin Created";
            }
        }
    }
    echo json_encode($response);
?>
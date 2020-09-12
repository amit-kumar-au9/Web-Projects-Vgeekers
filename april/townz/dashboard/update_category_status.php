<?php 
    include 'include/connection.php';
    
    $category_id = $_POST['category_id'];
    $check = "SELECT * FROM category WHERE id = '".$category_id."'";
    $result = mysqli_query($conn, $check);
    $row = $result -> fetch_assoc();
    $is_show = $row['is_show'];

    if($is_show == '1'){
        $checkQuery = "UPDATE category SET is_show = 0 WHERE id = '".$category_id."'";
    }
    else{
        $check = "SELECT * FROM category WHERE is_show = '1'";
        if(mysqli_num_rows(mysqli_query($conn, $check))<2){
            $checkQuery = "UPDATE category SET is_show = 1 WHERE id = '".$category_id."'";       
        }
    }
    mysqli_query($conn, $checkQuery);
    
    echo json_encode($response);

?>
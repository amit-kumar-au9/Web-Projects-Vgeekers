<?php 

    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $category_id = $decoded['category_id'];
    
    $checkBanner = "SELECT * FROM category_image WHERE category_id = '".$category_id."'";
    $resultBanner = mysqli_query($conn, $checkBanner);
    
    $data = array();
    $topBanner = array();
    $middleBanner = array();
    $lowerBanner = array();
    $response['data'] = array();

    $response['msg'] = "No banner found";
    $response['reason'] = "failed";
    $response['statusCode'] = 1;
    $response['actionCode'] = 0;
    
    if(mysqli_num_rows($resultBanner)>0){
        $response['msg'] = "Banner found";
        $response['reason'] = "success";
        $response['actionCode'] = 1;
        while($row = $resultBanner -> fetch_assoc()){
                $response['data'][] = "https://vgeekersinfotech.com/townz/dashboard/assets/images/category/".$row['image'];
        }
    }
    echo json_encode($response);
    
?>
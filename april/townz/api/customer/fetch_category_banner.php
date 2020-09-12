<?php 
    include '../connection.php';
    
    $topBanner = array();
    $middleBanner = array();
    $lowerBanner = array();
    $subCategory = array();
    $subCategory1 = array();
    $subCategory2 = array();
    
    $response['data'] = array();
    $response['msg'] = "No banner found";
    $response['reason'] = "failed";
    $response['statusCode'] = 1;
    $response['actionCode'] = 0;
    
    $checkBanner = "SELECT * FROM customer_app_banner";
    $resultBanner = mysqli_query($conn, $checkBanner);
    
    if(mysqli_num_rows($resultBanner)>0){
        $response['msg'] = "Banner found";
        $response['reason'] = "success";
        $response['actionCode'] = 1;
        while($row = $resultBanner -> fetch_assoc()){
            if($row['location'] == "category_top"){
                $topBanner[] = "https://vgeekersinfotech.com/townz/dashboard/assets/images/customer_banner/".$row['image']; 
            }
            elseif($row['location'] == "category_middle"){
                $middleBanner[] = "https://vgeekersinfotech.com/townz/dashboard/assets/images/customer_banner/".$row['image'];
            }
            elseif($row['location'] == "category_lower"){
                $lowerBanner[] = "https://vgeekersinfotech.com/townz/dashboard/assets/images/customer_banner/".$row['image'];
            }
        }
    }

    $checkIsShowCategory = "SELECT * FROM category WHERE is_show = 1";
    $checkIsShowCategoryResult = mysqli_query($conn, $checkIsShowCategory);
    $no = 1;
    while($row = $checkIsShowCategoryResult -> fetch_assoc()){

        $checkSubCategory = "SELECT category, category.dsc, category.dsc_short, is_show, category_id, sub_category as name, sub_category.id as id, price, sub_category.logo FROM sub_category JOIN category ON sub_category.category_id = category.id WHERE category_id = '".$row['id']."'";
        $checkSubCategoryResult = mysqli_query($conn, $checkSubCategory);

        while($row1 = $checkSubCategoryResult -> fetch_assoc()){
            if($no == 1){
                $subCategory1[] = [
                    "category" => $row1['category'],
                    "dsc" => $row1['dsc'],
                    "dsc_short" => $row1['dsc_short'],
                    "is_show" => $row1['is_show'],
                    "category_id" => $row1['category_id'],
                    "name" => $row1['name'],
                    "id" => $row1['id'],
                    "price" => $row1['price'],
                    "logo" => "https://vgeekersinfotech.com/townz/dashboard/assets/images/sub_category/".$row1['logo']
                    ];
            }
            elseif($no == 2){
                $subCategory2[] = [
                    "category" => $row1['category'],
                    "dsc" => $row1['dsc'],
                    "dsc_short" => $row1['dsc_short'],
                    "is_show" => $row1['is_show'],
                    "category_id" => $row1['category_id'],
                    "name" => $row1['name'],
                    "id" => $row1['id'],
                    "price" => $row1['price'],
                    "logo" => "https://vgeekersinfotech.com/townz/dashboard/assets/images/sub_category/".$row1['logo']
                    ];
            }
        }
        $no++;
    }
    
    $checkCategoryNote = "SELECT * FROM customer_basic_data WHERE id = 4";
    $row = mysqli_query($conn, $checkCategoryNote) -> fetch_assoc();
    $note = $row['content'];
    $response['data'] = ["banner1" => $topBanner,"banner2" => $middleBanner, "banner3" => $lowerBanner, "subCategory1" => $subCategory1, "subCategory2" => $subCategory2, "note" => $note];
    
    echo json_encode($response);
?>
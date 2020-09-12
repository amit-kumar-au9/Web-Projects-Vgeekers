<?php

    include 'connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $userId = $decoded['userId'];
    $leadType = $decoded['leadType']; //0 is for lead and 1 is for commission and 2 is for ongoing lead accepted by user in leadtype
    $dayType = $decoded['dayType']; //0 is for all day and 1 is for today
    // dayType only matters if leadType is 0 or 1
    $response['statusCode'] = 1;
    $response['actionCode'] = 0;
    $response['msg'] = "Error Occured";
	$response['reason'] = "Failed";
    $response['data'] = array();
    
    $checkActive = "SELECT * FROM vendor_details WHERE user_id = '".$userId."' AND active = '1'";
    if(mysqli_num_rows($result = mysqli_query($conn, $checkActive))){
        $row = $result -> fetch_assoc();
        // Fetching category of vendor
        $location = $row['location'];
        $city = $row['city'];
        $online = $row['online'];
        
        $someArray = json_decode($row['category'], true);
        $category = array();
        
        foreach($someArray as $value){
            $category[] = $value['name'];
        }
        
        if($leadType == 2){
            $checkCommission = "SELECT * FROM lead WHERE user_id = '".$userId."' AND is_accept = 1 AND is_lead = '1' ORDER BY id DESC"; //commision lead
            $checkLead = "SELECT * FROM lead JOIN accepted_lead ON lead.id = accepted_lead.lead_id WHERE accepted_lead.vendor_id = '".$userId."' ORDER BY accepted_lead.sid DESC"; //lead
            $response['msg'] = "All Ongoing lead sent";
        }
        else{
            $dayType = $decoded['dayType'];
            if($dayType == 1){
                // 1 for today
                date_default_timezone_set('Asia/Kolkata');
            	$date = date('Y/m/d');
            	if($leadType == 1){
            	    $checkCommission = "SELECT * FROM lead WHERE is_accept = 0 AND location = '".$location."' AND city = '".$city."' AND date = '".$date."' AND is_lead = '1' ORDER BY lead.id DESC"; //commission lead    
            	    $response['msg'] = "All Commission Detail of Today Sent";
            	}
            	else{
            	    $checkAcceptedLead = "SELECT * FROM accepted_lead JOIN lead ON accepted_lead.lead_id = lead.id WHERE accepted_lead.vendor_id = '".$userId."' AND date = '".$date."' ORDER BY lead.id DESC"; //accepted lead
            	    $checkAllLead = "SELECT * FROM lead WHERE city = '".$city."' AND date = '".$date."' AND is_lead = '0' AND is_accept = '0' ORDER BY lead.id DESC"; //all lead
            	    $response['msg'] = "All Lead Detail of Today Sent";
            	}
            }
            elseif($dayType == 0){
                // 0 for all
                if($leadType == 1){
            	    $checkCommission = "SELECT * FROM lead WHERE is_accept = 0 AND location = '".$location."' AND city = '".$city."' AND is_lead = '1' ORDER BY lead.id DESC"; //commission lead    
            	    $response['msg'] = "All Commission Detail Sent";
            	}
            	else{
            	    $checkAcceptedLead = "SELECT * FROM accepted_lead JOIN lead ON accepted_lead.lead_id = lead.id WHERE accepted_lead.vendor_id = '".$userId."' ORDER BY lead.id DESC"; //accepted lead
            	    $checkAllLead = "SELECT * FROM lead WHERE city = '".$city."' AND is_lead = '0' AND is_accept = '0' ORDER BY lead.id DESC"; //all lead
            	    $response['msg'] = "All Lead Detail Sent";
            	}
            }
        }
        // executing queries
        if($leadType == 2){
            $resultCommission = mysqli_query($conn, $checkCommission);
            $resultLead = mysqli_query($conn, $checkLead);
            if((mysqli_num_rows($resultCommission)>0) or (mysqli_num_rows($resultLead)>0)){
                while($row = $resultCommission -> fetch_assoc()){
                    $response['data'][] = $row;
            	}
            	while($row = $resultLead -> fetch_assoc()){
            	    $response['data'][] = [
            	        "id" => $row['id'],
            	        "is_lead" => $row['is_lead'],
            	        "category" => $row['category'],
            	        "city" => $row['city'],
            	        "location" => $row['location'],
            	        "user_id" => $row['user_id'],
            	        "customer_id" => $row['customer_id'],
            	        "customerName" => $row['customerName'],
            	        "name" => $row['name'],
            	        "date" => $row['date'],
            	        "time" => $row['time'],
            	        "price" => $row['price'],
            	        "upperPrice" => $row['upperPrice'],
            	        "status" => $row['status'],
                        "dsc" => $row['dsc'],
                        "lowerPrice" => $row['lowerPrice'],
                        "phone" => $row['phone'],
                        "address" => $row['address'],
                        "is_accept" => "1",
                        "rejectReason" => $row['rejectReason']
            	        ];
            	}
            	$response['statusCode'] = 1;
                $response['actionCode'] = 1;
            	$response['reason'] = "Success";
            }
            else{
                $response['statusCode'] = 1;
                $response['actionCode'] = 0;
                $response['msg'] = "No on going leads";
            	$response['reason'] = "Failed";
            }
        }
        if($online == 1){
            if($leadType == 1){
                $resultCommission = mysqli_query($conn, $checkCommission);
                if(mysqli_num_rows($resultCommission)>0){
                    while($row = $resultCommission -> fetch_assoc()){
                        $cat = $row['category'];
                        if(in_array($cat, $category)){
                            $response['data'][] = $row;    
                        }
                	}
                	$response['statusCode'] = 1;
                    $response['actionCode'] = 1;
                	$response['reason'] = "Success";
                }
                else{
                    $response['statusCode'] = 1;
                    $response['actionCode'] = 0;
                    $response['msg'] = "No commision lead found";
                	$response['reason'] = "Failed";
                }
            }
            elseif($leadType == 0){
                $resultAcceptedLead = mysqli_query($conn, $checkAcceptedLead);
                $resultAllLead = mysqli_query($conn, $checkAllLead);
                if(mysqli_num_rows($resultAllLead)>0){
                    $allLead = array();
                    while($row = $resultAcceptedLead -> fetch_assoc()){
                        $allLead[] = $row['lead_id'];
                    }
                    while($row = $resultAllLead -> fetch_assoc()){
                        $lead = $row['id'];
                        if(!(in_array($lead, $allLead))){
                            $cat = $row['category'];
                            if(in_array($cat, $category)){
                                $response['data'][] = $row;    
                            } 
                        }
                    }
                    // $response['data'] = $allLead;
                    $response['statusCode'] = 1;
                    $response['actionCode'] = 1;
                	$response['reason'] = "Success";
                }
                else{
                    $response['statusCode'] = 1;
                    $response['actionCode'] = 0;
                    $response['msg'] = "No lead found";
                	$response['reason'] = "Failed";
                }
            }    
        }
        else{
            $response['statusCode'] = 1;
            $response['actionCode'] = 0;
            $response['msg'] = "User is offline";
            $response['reason'] = "Failed"; 
        }
    }
    else{
    	$response['msg'] = "User is not active";
    	$response['reason'] = "Failed";
    }
    
    echo json_encode($response);
    
?>
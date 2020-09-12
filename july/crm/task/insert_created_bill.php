<?php 
    include '../include/connection.php';
    include '../include/session.php';

    $response['error'] = true;

    $pc_name = addslashes($_POST['pc_name']);
    $invoice_no = addslashes($_POST['invoice_no']);
    $invoice_date = addslashes($_POST['invoice_date']);
    $pc_address = addslashes($_POST['pc_address']);
    $pc_gstin = addslashes($_POST['pc_gstin']);
    $b_name = addslashes($_POST['b_name']);
    $b_gstin = addslashes($_POST['b_gstin']);
    $b_state = addslashes($_POST['b_state']);
    $b_state_code = addslashes($_POST['b_state_code']);
    $b_address = addslashes($_POST['b_address']);
    $s_name = addslashes($_POST['s_name']);
    $s_gstin = addslashes($_POST['s_gstin']);
    $s_state = addslashes($_POST['s_state']);
    $s_state_code = addslashes($_POST['s_state_code']);
    $s_address = addslashes($_POST['s_address']);
    $name_of_work = addslashes($_POST['name_of_work']);
    $job_no = addslashes($_POST['job_no']);
    $bank_name = addslashes($_POST['bank_name']);
    $ac_no = addslashes($_POST['ac_no']);
    $ifsc = addslashes($_POST['ifsc']);
    $branch = addslashes($_POST['branch']);
    
    $response['message'] = "Sorry Try Again";   

    $checkQuery = "INSERT INTO create_bill (pc_gstin, pc_name, pc_address, invoice_no, invoice_date, b_name, b_address, b_state, b_state_code, b_gstin, s_name, s_address, s_state, s_state_code, s_gstin, name_of_work, job_no, bank_name, ac_no, ifsc, branch, created_by, site_id, date) VALUES ('".$pc_gstin."', '".$pc_name."', '".$pc_address."', '".$invoice_no."', '".$invoice_date."', '".$b_name."', '".$b_address."', '".$b_state."', '".$b_state_code."', '".$b_gstin."', '".$s_name."', '".$s_address."', '".$s_state."', '".$s_state_code."', '".$s_gstin."', '".$name_of_work."', '".$job_no."', '".$bank_name."', '".$ac_no."', '".$ifsc."', '".$branch."', '".$login_id."', '".$site_id."', '".$date."') "; 

    if(mysqli_query($conn, $checkQuery)){
        $response['error'] = false;
        $response['message'] = "New Bill Created";
    }
    $last_id = mysqli_insert_id($conn);
    $response['id'] = $last_id;
    echo json_encode($response);
?>
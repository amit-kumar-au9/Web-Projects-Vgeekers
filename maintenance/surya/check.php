<?php  
    // include "dashboard/include/connection.php";
    
    // $value='';
    // //Query to fetch last inserted invoice number
    // $query = "SELECT reference_no from sales order by reference_no DESC LIMIT 1";
    // $resultQuery = mysqli_query($conn, $query);

    // if(mysqli_num_rows($resultQuery) > 0) {

    //     if ($row = mysqli_fetch_assoc($resultQuery)) {

    //         $value = $row['reference_no'];
    //         $val = explode("/", $value);
    //         $year = date("y");
    //         $cyear = "";
    //         $year1= $year +1;
    //         $cyear = $year."-".$year1;

    //         if($val[1] == $cyear){

    //         	$val[2] = $val[2] + 1;
    //         	//Incrementing numeric part
    //         	$val[2] = str_pad($val[2], 4, '0', STR_PAD_LEFT);

    //         	$value = $val[0]."/".$val[1]."/".$val[2];//concatenating incremented value

    //         }

    //         else{

    //         	$val[2] = 001;
    //         	$val[2] = str_pad($val[2], 4, '0', STR_PAD_LEFT);
    //         	$value = $val[0]."/".$cyear."/".$val[2];
    //         }
 
    //     }
    // } 
    // else {

    // 	$year = date("y");
    //     $cyear = "";
    //     $year1= $year +1;
    //     $cyear = $year."-".$year1;
    //     $value = "INV/".$cyear."/0001";
    // }

    // echo $value;

	$reference_no = array('INV/20-21/000128');

	foreach ($reference_no as $key => $value) {
		$a = strval($value[4].$value[5].$value[6].$value[7].$value[8]);
	}

	echo $a;

	if('20-21' == $a){
		echo "true";
	}


?>
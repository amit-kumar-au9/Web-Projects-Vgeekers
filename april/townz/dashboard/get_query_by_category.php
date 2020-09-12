<?php 

	include 'include/connection.php';
	
	$category = $_POST['category'];
	
	if($category == "all"){
	    $sql="SELECT * FROM lead WHERE is_lead = 1";    
	}
	else{
	    $sql="SELECT * FROM lead WHERE category = '".$category."'";    
	}
	
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
	    $output='<table class="responstable" >
		        <tr style="border:5px solid #024457;">
				    <th>S.No.</th>
				    <th>Job ID</th>
					<th>City</th>
					<th>Location</th>
					<th>Address</th>
					<th>Category Type</th>
					<th>Customer Name</th>
					<th>Accepted by Vendor</th>
					<th>Date</th>
					<th>Time</th>
					<th>Price</th>
					<th>Status</th>
					<th>Phone</th>
					<th>Description</th>
					<th>Complete?</th>
					<th>Remove</th>
					<th>Time Created</th>
				</tr>';
		$no=1;
		while($row = $result->fetch_assoc()){
	  	$variable = $row["id"];
	  	$output .= '<tr>
				    <td>'.$no++.'</td>
				    <td>'.$row["id"].'</td>';
		$output .= '<td>'.$row["city"].'</td>
		            <td>'.$row["location"].'</td>
		            <td>'.$row["address"].'</td>
            		<td>'.$row["category"].'</td>
            		<td>'.$row["customerName"].'</td>
            		<td>';				    
    	if($row["user_id"]!=""){
			$output.= 'Vendor Id '.$row["user_id"];
		}
	    else{
	        $output .= 'Not Assigned';
	    }
		$output .=	'</td>
					<td>'.$row["date"].'</td>
					<td>'.$row["time"].'</td>
					<td>'.$row["price"].'</td>
					<td>'.$row["status"].'</td>
					<td>'.$row["phone"].'</td>
					<td>'.$row["dsc"].'</td>';
		$output.='<td>
        				<form class="updateComplete" method="post">
                			<input type="hidden" name="id" value="'.$row["id"].'">
                			<input type="hidden" name="name" value="'.$row["name"].'">
                			<input type="hidden" name="user_id" value="'.$row["user_id"].'">
        					<button type="submit" class="btn btn-success" name="complete"';
		if($row["is_accept"] != 1){ 
			$output.= 'disabled';
		}
		$output.= '>';
		if($row["is_accept"] ==2){ 
			$output.= 'Completed';
		} 
		else{ $output.= 'Complete';
		}
		$output.= '</button>
		            </form>
					</td>
					<td>
				        <form class="delete"  method="post">
					        <input type="hidden" name="id" value="'.$row["id"].'">
					        <button type="submit" class="btn btn-danger" name="delete">Remove</button>
					    </form>
					 </td>
					 <td>'.$row["time_created"].'
			        </tr>';
		}
	}
	elseif($category =="Select Category"){
	    $output='<h1 align="center">Select Category Type</h1>';
	}
	else
	{
		$output='<h1 align="center">No lead for '.$category.' Category</h1>';
	}
	$output.='</table>';
	$response['content']=$output;
	echo json_encode($response);

?>
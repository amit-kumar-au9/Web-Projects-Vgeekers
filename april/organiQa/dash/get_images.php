<?php 

	include 'conn.php';
	session_start();
	$sql="SELECT * FROM product_images where product_id='".$_SESSION['product_id']."'";
	$result1=$con->query($sql);
	$output='<table class="table table-bordered table-striped">
	        <tr>
	          <th>S.No</th>
	          <th>Image</th>
	          <th>Update</th>
	          <th>Delete</th>
	        </tr>';
	if($result1->num_rows > 0){
	$count=0;
	while($row=$result1->fetch_assoc()){
	  $count =$count+1;
	  $variable = $row['id'];
	  $output .= '<tr>
	                <td>'.$count.'</td>
	                <td><img src="../asset/images/products/'.$row['image'].'" style="width:200px"></td>
	                <td>
	                	<a class="btn btn-primary delete" id="edit_'.$row['id'].'" onclick="edit_image('.$variable.')">Edit</a>
	                  <form class="editImage" action="" method="post" enctype="multipart/form-data" id="form-edit-'.$row['id'].'" style="display:none;">
            			<input type="file" class="form-control" name="UploadImage" required style="background:lightgrey">
	                  	<a class="btn btn-primary delete" id="delete" onclick="delete_image('.$variable.')">Update</a>
	                  </form>
	                </td>
	                <td>
	                  <a class="btn btn-danger delete" id="delete" onclick="delete_image('.$variable.')">Delete</a>
	                </td>
	              </tr>';
	}
	}
	else
	{
	$output.='<tr>
	            <td colspan="6" align="center">No data found</td>
	          </tr>';
	}
	$output.='</table>';
	$response['content']=$output;
	echo json_encode($response);

?>
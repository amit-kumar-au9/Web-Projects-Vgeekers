<?php 

		function view_uploaded_bill($duration, $site_id){
      if($duration == 'daily'){
        $date = date('Y-m-d');
        $checkAttendance = "SELECT * FROM upload_bill WHERE site_id = '".$site_id."' AND date = '".$date."' ORDER BY id DESC";
      }
      elseif($duration == 'weekly'){
        $end = date('Y-m-d');
        $start = strtotime($end);
        $start = strtotime("-7 day", $start);
        $start =  date('Y-m-d', $start);
        $checkAttendance = "SELECT * FROM upload_bill WHERE site_id = '".$site_id."' AND date > '".$start."' AND date <= '".$end."' ORDER BY id DESC";
      }
      elseif($duration == 'monthly'){
        $end = date('Y-m-d');
        $start = strtotime($end);
        $start = strtotime("-30 day", $start);
        $start =  date('Y-m-d', $start);
        $checkAttendance = "SELECT * FROM upload_bill WHERE site_id = '".$site_id."' AND date > '".$start."' AND date <= '".$end."' ORDER BY id DESC";
      }
      elseif($duration == 'all'){
        $checkAttendance = "SELECT * FROM upload_bill WHERE site_id = '".$site_id."' ORDER BY id DESC";
      }
			include '../include/connection.php';
			$data = '<div class="table-responsive">
                <table class="table table-bordered" id="example" class="display" width="100%" cellspacing="0" style="text-align: center;">
                  <thead>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Item Name</th>
                      <th class="text-primary">Billing Amount</th>
                      <th class="text-primary">Description</th>
                      <th class="text-primary" style="width: 200px !important">View Images/Pdf</th>
                      <th class="text-primary">Date</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Item Name</th>
                      <th class="text-primary">Billing Amount</th>
                      <th class="text-primary">Description</th>
                      <th class="text-primary" style="width: 200px !important">View Images/Pdf</th>
                      <th class="text-primary">Date</th>
                    </tr>
                  </tfoot>
                  <tbody>';
      $resultAttendance = mysqli_query($conn, $checkAttendance);
			$no = 1;
			while ($row = $resultAttendance -> fetch_assoc()) {
				$id = $row['id'];
				$data = $data.'<tr>
							<td>'.$no++.'</td>
							<td>'.$row["item_name"].'</td>
							<td>'.$row["billing_amount"].'</td>
							<td>'.$row["dsc"].'</td>
              <td align="center">
                <form action="view_upload_bill_files.php" method="post">
                  <input type="hidden" name="id" value="'.$row["id"].'>
                  <button class="btn btn-success" type="submit">View</button>
                </form>
              </td>
							<td>'.$row["date"].'</td>
	                    </tr>';
            }
            $data = $data.'</tbody>
                </table>
              </div>';
            return $data;
		}
?>
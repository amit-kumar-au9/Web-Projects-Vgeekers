<?php 

		function view_created_bill($duration, $site_id){
      if($duration == 'daily'){
        $date = date('Y-m-d');
        $checkAttendance = "SELECT * FROM create_bill WHERE site_id = '".$site_id."' AND date = '".$date."' ORDER BY id DESC";
      }
      elseif($duration == 'weekly'){
        $end = date('Y-m-d');
        $start = strtotime($end);
        $start = strtotime("-7 day", $start);
        $start =  date('Y-m-d', $start);
        $checkAttendance = "SELECT * FROM create_bill WHERE site_id = '".$site_id."' AND date > '".$start."' AND date <= '".$end."' ORDER BY id DESC";
      }
      elseif($duration == 'monthly'){
        $end = date('Y-m-d');
        $start = strtotime($end);
        $start = strtotime("-30 day", $start);
        $start =  date('Y-m-d', $start);
        $checkAttendance = "SELECT * FROM create_bill WHERE site_id = '".$site_id."' AND date > '".$start."' AND date <= '".$end."' ORDER BY id DESC";
      }
      elseif($duration == 'all'){
        $checkAttendance = "SELECT * FROM create_bill WHERE site_id = '".$site_id."' ORDER BY id DESC";
      }
			include '../include/connection.php';
			$data = '<div class="table-responsive">
                <table class="table table-bordered" id="example" class="display" width="100%" cellspacing="0" style="text-align: center;">
                  <thead>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Buyer Name</th>
                      <th class="text-primary">GST No.</th>
                      <th class="text-primary">State</th>
                      <th class="text-primary">Job Name</th>
                      <th class="text-primary">Total</th>
                      <th class="text-primary">View Bill</th>
                      <th class="text-primary">Date</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Buyer Name</th>
                      <th class="text-primary">GST No.</th>
                      <th class="text-primary">State</th>
                      <th class="text-primary">Job Name</th>
                      <th class="text-primary">Total</th>
                      <th class="text-primary">View Bill</th>
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
							<td>'.$row["b_name"].'</td>
							<td>'.$row["b_gstin"].'</td>
							<td>'.$row["b_state"].'</td>
              <td>'.$row["name_of_work"].'</td>
              <td>'.$row["total_amount"].'</td>
							<td>'.$row["date"].'</td>
              <td>
                <a class="btn btn-primary" href="pdf.php?id='.$row['id'].'"><span style="color: white">Print Bill</span></a>
              </td>
	          </tr>';
            }
            $data = $data.'</tbody>
                </table>
              </div>';
            return $data;
		}
?>
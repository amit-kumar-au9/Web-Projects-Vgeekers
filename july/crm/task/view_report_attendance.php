<?php 

		function view_attendance($duration, $site_id){
      if($duration == 'daily'){
        $date = date('Y-m-d');
        $checkAttendance = "SELECT project_name, today_count, total_count, date, attendance.id FROM attendance JOIN site ON site.id = attendance.site_id WHERE site.id = '".$site_id."' AND date = '".$date."'";
      }
      elseif($duration == 'weekly'){
        $end = date('Y-m-d');
        $start = strtotime($end);
        $start = strtotime("-7 day", $start);
        $start =  date('Y-m-d', $start);
        $checkAttendance = "SELECT project_name, today_count, total_count, date, attendance.id FROM attendance JOIN site ON site.id = attendance.site_id WHERE site.id = '".$site_id."' AND date > '".$start."' AND date <= '".$end."' ORDER BY attendance.id DESC";
      }
      elseif($duration == 'monthly'){
        $end = date('Y-m-d');
        $start = strtotime($end);
        $start = strtotime("-30 day", $start);
        $start =  date('Y-m-d', $start);
        $checkAttendance = "SELECT project_name, today_count, total_count, date, attendance.id FROM attendance JOIN site ON site.id = attendance.site_id WHERE site.id = '".$site_id."' AND date > '".$start."' AND date <= '".$end."' ORDER BY attendance.id DESC";
      }
      elseif($duration == 'all'){
        $checkAttendance = "SELECT project_name, today_count, total_count, date, attendance.id FROM attendance JOIN site ON site.id = attendance.site_id WHERE site.id = '".$site_id."' ORDER BY attendance.id DESC";
      }
			include '../include/connection.php';
			$data = '<div class="table-responsive">
                <table class="table" id="example" width="100%" cellspacing="0" style="text-align: center;">
                  <thead>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Site Name</th>
                      <th class="text-primary">Attendance</th>
                      <th class="text-primary">Out of</th>
                      <th class="text-primary">Date</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Site Name</th>
                      <th class="text-primary">Attendance</th>
                      <th class="text-primary">Out of</th>
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
							<td>'.$row["project_name"].'</td>
							<td>'.$row["today_count"].'</td>
							<td>'.$row["total_count"].'</td>
							<td>'.$row["date"].'</td>
	                    </tr>';
            }
            $data = $data.'</tbody>
                </table>
              </div>';
            return $data;
		}
?>
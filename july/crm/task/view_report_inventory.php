<?php 

		function view_inventory($duration, $site_id){
      if($duration == 'daily'){
        $date = date('Y-m-d');
        $checkAttendance = "SELECT material_category, quantity, inventory.id, inventory.date FROM inventory JOIN  material_category_list ON inventory.material_id = material_category_list.id  WHERE inventory.site_id = '".$site_id."' AND date = '".$date."' ORDER BY inventory.id DESC";
      }
      elseif($duration == 'weekly'){
        $end = date('Y-m-d');
        $start = strtotime($end);
        $start = strtotime("-7 day", $start);
        $start =  date('Y-m-d', $start);
        $checkAttendance = "SELECT material_category, quantity, inventory.id, inventory.date FROM inventory JOIN  material_category_list ON inventory.material_id = material_category_list.id  WHERE inventory.site_id = '".$site_id."' AND inventory.date > '".$start."' AND inventory.date <= '".$end."' ORDER BY inventory.id DESC";
      }
      elseif($duration == 'monthly'){
        $end = date('Y-m-d');
        $start = strtotime($end);
        $start = strtotime("-30 day", $start);
        $start =  date('Y-m-d', $start);
        $checkAttendance = "SELECT material_category, quantity, inventory.id, inventory.date FROM inventory JOIN  material_category_list ON inventory.material_id = material_category_list.id  WHERE inventory.site_id = '".$site_id."' AND inventory.date > '".$start."' AND inventory.date <= '".$end."' ORDER BY inventory.id DESC";
      }
      elseif($duration == 'all'){
        $checkAttendance = "SELECT material_category, quantity, inventory.id, inventory.date FROM inventory JOIN  material_category_list ON inventory.material_id = material_category_list.id  WHERE inventory.site_id = '".$site_id."' ORDER BY inventory.id DESC";
      }
			include '../include/connection.php';
			$data = '<div class="table-responsive">
                <table class="table table-bordered" id="example" class="display" width="100%" cellspacing="0" style="text-align: center;">
                  <thead>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Name</th>
                      <th class="text-primary">Quantity</th>
                      <th class="text-primary">Date</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Name</th>
                      <th class="text-primary">Quantity</th>
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
							<td>'.$row["material_category"].'</td>
							<td>'.$row["quantity"].'</td>
							<td>'.$row["date"].'</td>
	          </tr>';
            }
            $data = $data.'</tbody>
                </table>
              </div>';
            return $data;
		}
?>
<?php
    if($_GET['id'] == ''){
          echo "<script>window.location.href='add_created_bill.php';</script>";
    }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Invoice
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<style type="text/css">

		.table td{
			border: 1px solid black;
		}
		.table th{
			border: 1px solid black;
		}
		/*.table{
			margin: 10px;
		}*/
		ul li {
			list-style-type: none;
		}
		div.container-fluid {
		    font-family: 'Cantarell', sans-serif;
		    background: white;
		    padding: 80px 0px 50px 0px;
		    font-size: 14px;
		}
		@import url('https://fonts.googleapis.com/css2?family=Cantarell:wght@700&display=swap');

	</style>

	<style type="text/css">

	    table { page-break-inside:auto }
	    tr    { page-break-inside:avoid; page-break-after:auto }
	    thead { display:table-header-group }
	    tfoot { display:table-footer-group }

	</style>
</head>
<?php 
	include 'include/connection.php';
	include 'include/session.php';
	$selectBill = "SELECT * FROM create_bill WHERE id = '".$_GET['id']."'";
	$resultBill = mysqli_query($conn, $selectBill);
	$bill_row = $resultBill -> fetch_assoc();
?>
<body>
	<div class="container-fluid">
		<h4 align="center" style="font-weight: 700">TAX INVOICE</h4>
		<br>
		<div class="row" style="max-height: 145px !important">
			<div class="col-md-6">
				<ul>
					<li><b>GSTIN : <?php echo $bill_row['pc_gstin'] ?></b></li>
					<li><b>Name : <?php echo $bill_row['pc_name'] ?></b></li>
					<li><b>Address : <?php echo $bill_row['pc_address'] ?></b></li>
					<li><b>S.no. of Invoice: <?php echo $bill_row['invoice_no'] ?></b></li>
					<li><b>Date of Invoice : <?php echo $bill_row['invoice_date'] ?></b></li>
				</ul>
			</div>
			<div class="col-md-6">
				<img src="assets/img/logo.jpg" style="height: 120px;float: right;margin-right: 80px">
			</div>
		</div>
		<div class="row" style="margin-top: 40px">
			<div class="col-md-6">
				<ul>
					<li><b>Details of Receiver (Billed to)</b></li>
					<li><b>Name : <?php echo $bill_row['b_name'] ?></b></li>
					<li><b>Address : <?php echo $bill_row['b_address'] ?></b></li>
					<li><b>State: <?php echo $bill_row['b_state'] ?></b></li>
					<li><b>State Code: <?php echo $bill_row['b_state_code'] ?></b></li>
					<li><b>GSTIN/Unique ID: <?php echo $bill_row['b_gstin'] ?></b></li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul>
					<li><b>Details of Consignee (Shipped to)</b></li>
					<li><b>Name : <?php echo $bill_row['s_name'] ?></b></li>
					<li><b>Address : <?php echo $bill_row['s_address'] ?></b></li>
					<li><b>State: <?php echo $bill_row['s_state'] ?></b></li>
					<li><b>State Code: <?php echo $bill_row['s_state_code'] ?></b></li>
					<li><b>GSTIN/Unique ID: <?php echo $bill_row['s_gstin'] ?></b></li>
				</ul>
			</div>
		</div>
		<div class="row" style="margin-top: 40px">
			<div class="col-md-12">
				<ul>
					<li>Name of work :- <?php echo $bill_row['name_of_work'] ?></li>
					<li>Job No. <?php echo $bill_row['job_no'] ?></li>
				</ul>
			</div>
		</div>
		<div class="row" style="padding: 0px 50px 0px 50px">
			<table border="1" cellspacing="0" style="border: 0px solid black; border-collapse: collapse;" class="table" cellpadding="2">
				<tbody>
					<tr>
						<td rowspan="2" >
							<b>S.no.</b>
						</td>
						<td rowspan="2" >
							<b>Description</b>
						</td>
						<td rowspan="2" >
							<b>HSN</b>
						</td>
						<td rowspan="2" >
							<b>Qty</b>
						</td>
						<td rowspan="2" >
							<b>Unit</b>
						</td>
						<td rowspan="2" >
							<b>Rate</b>
						</td>
						<td rowspan="2" >
							<b>Total</b>
						</td>
						<td rowspan="2" >
							<b>Dis.</b>
						</td>
						<td rowspan="2" >
							<b>Taxable Value</b>
						</td>
						<td colspan="2" >
							<b>CGST</b>
						</td>
						<td colspan="2" >
							<b>SGST</b>
						</td>
						<td colspan="2" >
							<b>IGST</b>
						</td>
					</tr>
					<tr>
						<td>
							<b>Rate</b>
						</td>
						<td>
							<b>Amt.</b>
						</td>
						<td>
							<b>Rate</b>
						</td>
						<td>
							<b>Amt.</b>
						</td>
						<td>
							<b>Rate</b>
						</td>
						<td>
							<b>Amt.</b>
						</td>
					</tr>
					<?php 
						$selectBillItem = "SELECT * FROM create_bill_item WHERE create_bill_id = '".$bill_row['id']."'";
						$resultBillItem = mysqli_query($conn, $selectBillItem);
						$no = 1;
						$total_amount = 0;
						while ($bill_item = $resultBillItem -> fetch_assoc()) {
							$total_amount = $total_amount + $bill_item['total'] + $bill_item['igst_amount'];
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $bill_item['name']; ?></td>
						<td><?php echo $bill_item['hsn']; ?></td>
						<td><?php echo $bill_item['qty']; ?></td>
						<td><?php echo $bill_item['unit']; ?></td>
						<td><?php echo $bill_item['rate']; ?></td>
						<td><?php echo $bill_item['total']; ?></td>
						<td>-</td>
						<td><?php echo $bill_item['taxable_value']; ?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>
							<?php echo $bill_item['igst_rate']; ?>
						</td>
						<td>
							<?php echo $bill_item['igst_amount']; ?>
						</td>
					</tr>
					<?php 
						}
					?>
					<tr>
						<td>
						</td>
						<td colspan="4" >
							Freight
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td colspan="4" >
							Insurance
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td colspan="4" >
							Packing and forwarding Charges
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
							<b>TOTAL</b>
						</td>
						<td colspan="4" >
							<b><?php echo $total_amount; ?></b>
						</td>
						<td>
						</td>
						<td>
						</td>
					</tr>
				</tbody>
			</table>
			
		</div>
		<div class="row" style="margin-top: 40px">
			<div class="col-md-12">
				<ul>
					<li><b style="text-transform:capitalize">Amount in INR: <?php echo getIndianCurrency($total_amount); ?> Only</b></li>
					<br>
					<li>Company's Bank Detail</li>
					<li>Bank Name : <?php echo $bill_row['bank_name'] ?></li>
					<li>A/c no. : <?php echo $bill_row['ac_no'] ?></li>
					<li>IFSC: <?php echo $bill_row['ifsc'] ?></li>
					<li>Branch: <?php echo $bill_row['branch'] ?></li>

				</ul>
			</div>
		</div>
		<div class="row" style="margin-top: 40px">
			<div class="col-md-7">
				
			</div>
			<div class="col-md-5">
				<ul>
					<li>For Pashupati Construction</li>
					<br><br>
					<li>Authorised Signatory</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
<script>
  window.print();
</script>
<?php 
	function getIndianCurrency(float $number)
	{
	    $decimal = round($number - ($no = floor($number)), 2) * 100;
	    $hundred = null;
	    $digits_length = strlen($no);
	    $i = 0;
	    $str = array();
	    $words = array(0 => '', 1 => 'one', 2 => 'two',
	        3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
	        7 => 'seven', 8 => 'eight', 9 => 'nine',
	        10 => 'ten', 11 => 'eleven', 12 => 'twelve',
	        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
	        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
	        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
	        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
	        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
	    $digits = array('', 'hundred','thousand','lakh', 'crore');
	    while( $i < $digits_length ) {
	        $divider = ($i == 2) ? 10 : 100;
	        $number = floor($no % $divider);
	        $no = floor($no / $divider);
	        $i += $divider == 10 ? 1 : 2;
	        if ($number) {
	            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
	            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
	            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
	        } else $str[] = null;
	    }
	    $Rupees = implode('', array_reverse($str));
	    $paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
	    return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
	}
?>

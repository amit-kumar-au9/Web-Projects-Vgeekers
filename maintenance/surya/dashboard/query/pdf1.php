<?php 

	include 'fetch_warehouse.php';
	include 'fetch_vendor.php'; 
	include 'fetch_company_detail.php'; 



	$invoice_no = "INV0010";
	date_default_timezone_set('Asia/Kolkata');
	$date = date('d/m/Y');
	$delivery_note = "";
	$mode_of_payment = "";
	$supplier_refernce = "";


	$tax_type = "Inclusive";
	$price = 100;
	$quantity = 10;
	$discount = 0;
	$igst_tax = 0; 
	$cgst_tax = 0; 
	$sgst_tax = 0;
	$discount_value = 0;
	$gross_total = 100;
	$name = "Arhar dal";
	$hsn = "1101";
	$total = 100;
	$tax_value = 0;


	$shipping_address = "NO ADDRESS";
	$shipping_city = $vendor_city;
	$shipping_state = $vendor_state;
	$buyer_order = "";
	$dispatch_document_no = "";
	$delivery_note = "";
	$delivery_note_date = "";
	$dispatch_through = "";
	$flat_discount = 0;
	$shipping_charge = 0;


	$bank_name = "ICICI";
	$account_no = "695605500474";
	$branch_ifsccode = "ICIC0006956";

?>

<!DOCTYPE html>
<html>
<head>
	
	<title>
		Invoice
		
	</title>

	<style type="text/css">

		.table td{
			border: 1px solid black;
		}
		.table th{
			border: 1px solid black;
		}
		.table{
			margin: 10px;
		}
		.footerpad
		{
			padding: 4px;
		}
		.footerpad{
			padding: 5px;
		}
		.minheight{
		    min-height: 1000px;
		}
		.fontS{
			font-size: 11px;
		}
		.fontH{
			font-size: 12px;
		}

	</style>

	<style type="text/css">

	    table { page-break-inside:auto }
	    tr    { page-break-inside:avoid; page-break-after:auto }
	    thead { display:table-header-group }
	    tfoot { display:table-footer-group }

	</style>

</head>
<body>
	<table width="670px" border="1" cellspacing="0" style="border: 0px solid black; border-collapse: collapse;" class="table" cellpadding="2">
		<tr>
			<td colspan="6" style="border: 0px;text-align: right;">Tax Invoice</td>
			<td colspan="8" style="border: 0px;text-align: right;">(ORIGINAL FOR RECIPIENT)</td>
		</tr>

		<tr>
			<td rowspan="3" colspan="6">
				<table>
					<tr>
						<td style="border: 0px;font-size:13px;">
						
								<img src="../../plugins/images/ee_1579333657.jpg" width="70" height="50">
							
						</td>
						<td style="border: 0px;font-size: 13px;padding-left: 10px;" valign="top">
							
							<b><?php echo $warehouse_name;?></b><br>
							<span style="font-size: 10px;">
								<?php echo $warehouse_address;?>
								<br>
								<?php echo $warehouse_city;?>
								<br>
								<?php echo $warehouse_state;?>
								<br>
								<?php echo $warehouse_country;?>
								<br>
								<?php echo $warehouse_phone;?>
								<br>
								<?php echo $warehouse_email;?>
								<br>
								<?php echo "GSTIN : ".$warehouse_gst;?>
							</span>

							
						</td>
					</tr>
				</table>
			</td>
		
			<td valign="top" style="width: 25%;font-size: 13px;" colspan="4">
				Invoice Number<br>
				<p style="font-size: 13px;font-weight:bold"><?php echo $invoice_no; ?></p>
			</td>
			<td valign="top" style="width: 25%;font-size: 13px;" colspan="4">
				Date<br>
				<p style="font-size: 13px;font-weight:bold"><?php echo $date; ?></p>
			</td>
		</tr>
		<tr style="font-size: 13px;">
			<td valign="top" colspan="4" style="font-size: 13px;">
				Delivery note<br>
				<p style="font-size: 13px;font-weight:bold"><?php echo $delivery_note; ?></p>
			</td>
			<td valign="top" colspan="4" style="font-size: 13px;">
				Mode / Term of payment<br>
				<p style="font-size: 13px;font-weight:bold"><?php echo $mode_of_payment; ?></p>
			</td>
		</tr>

		<tr style="font-size: 13px;">
			<td valign="top" colspan="4" style="font-size: 13px;">
				Supplier's Ref <br>
				<p style="font-size: 13px;font-weight:bold"><?php echo $supplier_refernce; ?></p>
			</td>
			<td valign="top" colspan="4" style="font-size: 13px;">
				Other Reference<br>

			</td>
		</tr>
		<tr>
			<td valign="top" rowspan="" style="text-align:left;font-size: 13px;padding: 10px;" colspan="5">
					<b>Billing Address</b><br>
					<span style="font-size: 12px;"><b><?php echo $vendor_name; ?><br/></b></span>
					<span style="font-size: 11px;"><?php echo $vendor_address; ?><br>
						<?php echo $vendor_city; ?><br>
						<?php echo $vendor_state; ?> - <?php echo $vendor_postal_code; ?><br>						
						<?php echo $vendor_phone; ?><br>
						<?php echo $vendor_email; ?><br>
						GSTIN/UIN :<?php echo $vendor_gst; ?>
					</span>
			</td>
			<td colspan="5" valign="top" style="padding: 10px;">
				<b>Shipping Address</b><br>
				<span style="font-size: 12px;"><b><?php echo $vendor_name; ?></b></span><br/>
				<span style="font-size: 11px;"><?php echo $shipping_address; ?></span><br>
				<span style="font-size: 11px;"><?php echo $shipping_city; ?></span><br>
				<span style="font-size: 11px;"><?php echo $shipping_state; ?></span><br>
			</td>
			<td colspan="4" style="font-size: 11px;" >
				Buyer Order<br><span style="font-size: 13px;font-weight:bold"><?php echo $buyer_order;?></span>
				<br/>
				Dated<br><span style="font-size: 13px;font-weight:bold"><?php echo date("d-m-Y", strtotime($date));?></span>
				<br/>
				Dispatch Document No<br><span style="font-size: 13px;font-weight:bold"><?php echo $dispatch_document_no;?></span>
				<br/>
				Delivery note date<br><span style="font-size: 13px;font-weight:bold"><?php echo $delivery_note_date;?></span>
				<br/>
				Dispatch Through<br><span style="font-size: 13px;font-weight:bold"><?php echo $dispatch_through;?></span>
			</td>
		</tr>
		<tr>
			<th style="text-align: center;font-size: 12px;">SR</th>
			<th style="text-align: center;font-size: 12px;" colspan="2">Item Name</th>
			<th style="text-align: center;font-size: 12px;" colspan="2">HSN Code</th>
			<th style="text-align: center;font-size: 12px;">Rate</th>
			<th style="text-align: center;font-size: 12px;">KG</th>
			<th style="text-align: center;font-size: 12px;">Amount</th>
			<th style="text-align: center;font-size: 12px;" colspan="2">Disc(%)</th>
			<th style="text-align: center;font-size: 12px;" colspan="2">Taxable Value</th>
			<th style="text-align: center;font-size: 12px;">IGST</th>
			<th style="text-align: center;font-size: 12px;">SGST</th>
			<th style="text-align: center;font-size: 12px;">CGST</th>
			<th style="text-align: center;font-size: 12px;">Total Amount</th>
		</tr>
			<?php 
				$i = 1;$tot = 0;$totD=0;$q=0;$igst=0; $cgst=0; $sgst=0;
				// foreach ($items as $value) { 
 			?>
			<tr>
				<td align="center" class="fontS" width="30px"><?php echo $i; ?></td>
				<td class="fontS" colspan="2" width="200px"><?php echo $name; ?></td>
				<td class="fontS" colspan="2"><?php echo $hsn; ?></td>
				<td align="right" class="fontS">

					<?php 

						if($tax_type =="Inclusive"){
							echo $price - ($igst_tax + $cgst_tax + $sgst_tax) / $quantity;
						}
						else{
							echo $price;
						}

					?>
					
				</td>
				<td align="center" class="fontS"><?php echo $quantity; ?></td>
				<?php 
					if($tax_type =="Inclusive"){
				?>
				<td align="center" class="fontS"><?php echo $gross_total - $igst_tax -$cgst_tax -$sgst_tax;?></td>
				<?php 
					}else{
				?>
				<td align="center" class="fontS"><?php echo $gross_total;?></td>
				<?php
					}
				?>
				<td align="right" class="fontS" colspan="2"><?php echo $discount."(".$discount_value."%)";?></td>
				
				<td align="center" class="fontS" colspan="2">
					<?php 
						if($tax_type =="Inclusive"){
							echo $gross_total - $discount - $igst_tax - $cgst_tax - $sgst_tax;
						}else{
							echo ($gross_total - $discount) ;//1800
						}	
					?>
				</td>
				<td align="right" class="fontS"><?php echo $igst_tax;?><br>(<?php echo $igst; ?>%)</td>
				<td align="right" class="fontS"><?php echo $cgst_tax;?><br>(<?php echo $cgst; ?>%)</td>
				<td align="right" class="fontS"><?php echo $sgst_tax;?><br>(<?php echo $sgst; ?>%)</td>
				<td align="right" class="fontS">
					<?php  
						if($tax_type =="Inclusive"){
							echo $gross_total - $discount;
						}else{
							echo ($gross_total - $discount + $igst_tax + $cgst_tax + $sgst_tax);
						}	
					?>
				</td>
			</tr>
			<?php 
					$i++;
					if($tax_type =="Inclusive"){
						$tot += $gross_total - $discount - $igst_tax - $cgst_tax - $sgst_tax;
						$totD += $gross_total - $igst_tax - $cgst_tax - $sgst_tax;
					}else{
						$tot += $gross_total - $discount;
						$totD += $gross_total;
					}

					$q+=$quantity; 
					$igst += $igst_tax; 
					$cgst += $cgst_tax;
					$sgst += $sgst_tax;
				// } 
			?>
			<tr>
				<td colspan="6" align="right" style="font-size: 11px;font-weight: bold;">Total</td>
				<td align="center" style="font-size: 11px;"><?php echo $q; ?></td>
				<td align="center" style="padding: 8px;font-size: 11px;">
					<?php
						echo $totD;
					?>	
				</td>
				<td align="center" class="fontS" colspan="2">
					<?php
						echo $discount_value;
					?>
				</td>
				<td align="center" class="fontS" colspan="2">
					<?php
						echo $total-$tax_value;
					?>	
				</td>
				<td align="right" class="fontS">
					<?php echo $igst;?>	
				</td>
				<td align="right" class="fontS">
					<?php echo $cgst;?>
				</td>
				<td align="right" class="fontS">
					<?php echo $sgst;?>
				</td>
				<td align="right" class="fontS">
					<?php
						echo $total;
					?>		
				</td>
				
			</tr>
			<tr>
				<td colspan="14" style="padding: 10px;"></td>
			</tr>
			<tr>
				<td colspan="12" align="right" class="footerpad fontH"><b>Shipping Charge</td>
				<td align="right" colspan="2" class="fontH"><?php echo round($shipping_charge); ?></td>
			</tr>
			<tr>
				<td colspan="12" align="right" class="footerpad fontH"><b>Total Discount</td>
				<td align="right" colspan="2" class="fontH"><?php echo round($discount_value+$flat_discount); ?></td>
			</tr>
			<tr>
				<td colspan="12" align="right" class="footerpad fontH"><b>Total GST</td>
				<td align="right" colspan="2" class="fontH">
					<?php echo $igst + $cgst + $sgst;?>	
				</td>
			</tr>
			<tr>
				<td colspan="12" align="right" class="footerpad fontH"><b>Grand Total Amount</td>
				<td align="right" colspan="2" class="fontH"><?php echo round($total+$shipping_charge-$flat_discount); ?></td>
			</tr>
			<!-- <tr>
				<td colspan="12" align="right" class="footerpad fontH"><b>Paid</b></td>
				<td align="right" colspan="2" class="fontH">
					<?php
						// if($paid_amount!=null){
						// 	echo round($paid_amount);
						// }
						// else{
						// 	echo "0";
						// }
					?>
				</td>
			</tr> -->

			<!-- <tr>
				<td colspan="12" align="right" class="footerpad fontH"><b>Due Amount</b></td>
				<td align="right" colspan="2" class="fontH">
					<?php
						//echo round($shipping_charge+$total-$paid_amount-$flat_discount);
					?>
				</td>
			</tr> -->
        <tr>
        	<!-- <td colspan="14" valign="top" style="height: 60px;border-bottom: 0px;font-size: 13px;">
        		Due Amount (in Words)<br>
        		<b> INR <?php //echo $this->numbertowords->convert_number(round($shipping_charge+$total-$paid_amount-$flat_discount)); ?> Only</b><br/>
        		Paid Amount (in Words)<br>
        		<b> INR <?php //echo $this->numbertowords->convert_number(round($paid_amount+$flat_discount)); ?> Only</b>
        	</td> -->
        	<td colspan="14" valign="top" style="height: 60px;border-bottom: 0px;font-size: 13px;">
        		Total Amount (in Words)<br>
        		<b> INR 
        		 Only</b>
        	</td>
        </tr>
        <tr>
        	<td colspan="14" style="height: 60px;border-bottom: 0px;font-size: 13px;">
        		<b>Head Office : </b>
        			<span>
						<?php echo $company_name; ?>,
	    				<?php echo $street; ?>,
						<?php echo $city_name; ?>,
						<?php echo $state_name; ?>
						<?php echo $country_name; ?> - <?php echo $zip_code; ?>
        			</span>
        		<br><p>Company's PAN  : <b><?php echo $cpan; ?></b></td>
        </tr>
        <tr>
        	<td colspan="6" style="border-top:0px;border-right: 0px;font-size: 13px;">
        		Declartion<br>
        		We declare that this invoice shows the actual price of the goods describe and that all paticular are true and correct.
        	</td>
        	<td style="font-size: 10px;" colspan="8" style="border-top: 0px;border-top: 0px;border-left:0px;font-size: 13px;">
        		Company Bank Details
        		<table>
        			<tr>
        				<td style="border: 0px;font-size: 13px;" >Bank Name</td>
          				<td style="border: 0px;font-size: 13px;"><?php if(isset($bank_name)){echo $bank_name;}?></td>
        			</tr>
        			<tr>
						<td style="border: 0px;font-size: 13px;">A/C No</td>
						<td style="border: 0px;font-size: 13px;"><?php if(isset($account_no)){echo $account_no;}?></td>
	        		</tr>
        		<tr>
					<td style="border: 0px;font-size: 13px;">Branch code & Ifsc code</td>
					<td style="border: 0px;font-size: 13px;"><?php if(isset($branch_ifsccode)){echo $branch_ifsccode;}?></td>
        		</tr>
        		</table>
        	</td>
        </tr>
        <tr>
        	<td colspan="6" style="height: 80px;font-size: 13px;" valign="top">
        		Custom Seal Signature
        		<br>
        		<br>
        	</td>
        	<td colspan="8" valign="top" style="text-align: right;font-size: 13px;">
        		For <?php echo $company_name; ?>
        		<br>
        		Authorised signatory
        	</td>
        </tr>    
	</table>
	<table>
		<tr>
        	<td colspan="14" style="border:0px;text-align: center;font-size: 13px;"><b>This is Computer Generated Invoice</b></td>
        </tr>
	</table>
</body>
</html>
<script>
  window.print();
</script>
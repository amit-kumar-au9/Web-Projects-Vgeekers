

<?php
session_start();
$num=$_SESSION['phone'];
  include"include/conn.php";

				$sql="SELECT * FROM product_display";
					 $result=$con->query($sql);
				if($result->num_rows > 0)
				{
		  			while($row=$result->fetch_assoc())
		  			{  
						
					echo"<div class='product--green' style='display:inline-block;float:left'>
							<div class='product_inner'>
		  						<img src='dash/".$row['image']."' width='400' class='o'>
		  						<h2 style='color:white'>".$row['Product_name']."</h2>
		  						<h5><span style='text-decoration:line-through;'>Rs".$row['Product_cost']."/-</span> Rs".$row['Product_price']."/-</h5>
    							<div style='display:inline-block;cursor:pointer;float:left' class='m'>
    							<form action='cart.php' method='post' style='display:inline-block'>
	    								<input type='text' value='".$row['Product_name']."' style='display:none' name='pname'>
									    <input type='text' value='".$num."' style='display:none' name='num'>
									     <input type='text' value='".$row['Product_price']."' style='display:none' name='pcost'>
	    								<button type='submit' style='display:inline-block'><i class='ion-ios-cart' style='color:yellow;font-size:40px;margin:10px;'></i></button>
	    							</form>	
    								<form action='wish.php' method='post' style='display:inline-block'>
	    								<input type='text' value='".$row['Product_name']."' style='display:none' name='pname'>
									    <input type='text' value='".$num."' style='display:none' name='num'>
									     <input type='text' value='".$row['Product_price']."' style='display:none' name='pcost'>
	    								<button type='submit'><i class='ion-ios-heart' style='color:red;font-size:40px;margin:10px;'></i></button>
	    							</form>	
    						
    							
							
							<div class='product_overlay'>
		  						<h2>Added to basket</h2>
		  						<i class='fa fa-check'></i>
							</div>
    								
    							</div>
    							
							</div>
							<div class='product_overlay'>
		  						<h2>Added to basket</h2>
		  						<i class='fa fa-check'></i>
							</div>
						</div>";
					}
				}
			?>
				